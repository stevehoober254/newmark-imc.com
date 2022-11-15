<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOurExpertiseRequest;
use App\Http\Requests\StoreOurExpertiseRequest;
use App\Http\Requests\UpdateOurExpertiseRequest;
use App\Models\OurExpertise;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OurExpertiseController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('our_expertise_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourExpertises = OurExpertise::with(['team', 'media'])->get();

        return view('admin.ourExpertises.index', compact('ourExpertises'));
    }

    public function create()
    {
        abort_if(Gate::denies('our_expertise_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ourExpertises.create');
    }

    public function store(StoreOurExpertiseRequest $request)
    {
        $ourExpertise = OurExpertise::create($request->all());

        if ($request->input('expertise_logo', false)) {
            $ourExpertise->addMedia(storage_path('tmp/uploads/' . basename($request->input('expertise_logo'))))->toMediaCollection('expertise_logo');
        }

        if ($request->input('image', false)) {
            $ourExpertise->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        foreach ($request->input('client_logos', []) as $file) {
            $ourExpertise->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('client_logos');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $ourExpertise->id]);
        }

        return redirect()->route('admin.our-expertises.index');
    }

    public function edit(OurExpertise $ourExpertise)
    {
        abort_if(Gate::denies('our_expertise_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourExpertise->load('team');

        return view('admin.ourExpertises.edit', compact('ourExpertise'));
    }

    public function update(UpdateOurExpertiseRequest $request, OurExpertise $ourExpertise)
    {
        $ourExpertise->update($request->all());

        if ($request->input('expertise_logo', false)) {
            if (!$ourExpertise->expertise_logo || $request->input('expertise_logo') !== $ourExpertise->expertise_logo->file_name) {
                if ($ourExpertise->expertise_logo) {
                    $ourExpertise->expertise_logo->delete();
                }
                $ourExpertise->addMedia(storage_path('tmp/uploads/' . basename($request->input('expertise_logo'))))->toMediaCollection('expertise_logo');
            }
        } elseif ($ourExpertise->expertise_logo) {
            $ourExpertise->expertise_logo->delete();
        }

        if ($request->input('image', false)) {
            if (!$ourExpertise->image || $request->input('image') !== $ourExpertise->image->file_name) {
                if ($ourExpertise->image) {
                    $ourExpertise->image->delete();
                }
                $ourExpertise->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($ourExpertise->image) {
            $ourExpertise->image->delete();
        }

        if (count($ourExpertise->client_logos) > 0) {
            foreach ($ourExpertise->client_logos as $media) {
                if (!in_array($media->file_name, $request->input('client_logos', []))) {
                    $media->delete();
                }
            }
        }
        $media = $ourExpertise->client_logos->pluck('file_name')->toArray();
        foreach ($request->input('client_logos', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $ourExpertise->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('client_logos');
            }
        }

        return redirect()->route('admin.our-expertises.index');
    }

    public function show(OurExpertise $ourExpertise)
    {
        abort_if(Gate::denies('our_expertise_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourExpertise->load('team');

        return view('admin.ourExpertises.show', compact('ourExpertise'));
    }

    public function destroy(OurExpertise $ourExpertise)
    {
        abort_if(Gate::denies('our_expertise_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourExpertise->delete();

        return back();
    }

    public function massDestroy(MassDestroyOurExpertiseRequest $request)
    {
        OurExpertise::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('our_expertise_create') && Gate::denies('our_expertise_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new OurExpertise();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
