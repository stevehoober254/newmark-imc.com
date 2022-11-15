<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySectorRequest;
use App\Http\Requests\StoreSectorRequest;
use App\Http\Requests\UpdateSectorRequest;
use App\Models\Sector;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SectorController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('sector_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sectors = Sector::with(['team', 'media'])->get();

        return view('admin.sectors.index', compact('sectors'));
    }

    public function create()
    {
        abort_if(Gate::denies('sector_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sectors.create');
    }

    public function store(StoreSectorRequest $request)
    {
        $sector = Sector::create($request->all());

        if ($request->input('image', false)) {
            $sector->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $sector->id]);
        }

        return redirect()->route('admin.sectors.index');
    }

    public function edit(Sector $sector)
    {
        abort_if(Gate::denies('sector_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sector->load('team');

        return view('admin.sectors.edit', compact('sector'));
    }

    public function update(UpdateSectorRequest $request, Sector $sector)
    {
        $sector->update($request->all());

        if ($request->input('image', false)) {
            if (!$sector->image || $request->input('image') !== $sector->image->file_name) {
                if ($sector->image) {
                    $sector->image->delete();
                }
                $sector->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($sector->image) {
            $sector->image->delete();
        }

        return redirect()->route('admin.sectors.index');
    }

    public function show(Sector $sector)
    {
        abort_if(Gate::denies('sector_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sector->load('team');

        return view('admin.sectors.show', compact('sector'));
    }

    public function destroy(Sector $sector)
    {
        abort_if(Gate::denies('sector_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sector->delete();

        return back();
    }

    public function massDestroy(MassDestroySectorRequest $request)
    {
        Sector::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('sector_create') && Gate::denies('sector_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Sector();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
