<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOfficeRequest;
use App\Http\Requests\StoreOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;
use App\Models\Country;
use App\Models\Office;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OfficeController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('office_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offices = Office::with(['country', 'team', 'media'])->get();

        return view('admin.offices.index', compact('offices'));
    }

    public function create()
    {
        abort_if(Gate::denies('office_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.offices.create', compact('countries'));
    }

    public function store(StoreOfficeRequest $request)
    {
        $office = Office::create($request->all());

        if ($request->input('office_image', false)) {
            $office->addMedia(storage_path('tmp/uploads/' . basename($request->input('office_image'))))->toMediaCollection('office_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $office->id]);
        }

        return redirect()->route('admin.offices.index');
    }

    public function edit(Office $office)
    {
        abort_if(Gate::denies('office_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $office->load('country', 'team');

        return view('admin.offices.edit', compact('countries', 'office'));
    }

    public function update(UpdateOfficeRequest $request, Office $office)
    {
        $office->update($request->all());

        if ($request->input('office_image', false)) {
            if (!$office->office_image || $request->input('office_image') !== $office->office_image->file_name) {
                if ($office->office_image) {
                    $office->office_image->delete();
                }
                $office->addMedia(storage_path('tmp/uploads/' . basename($request->input('office_image'))))->toMediaCollection('office_image');
            }
        } elseif ($office->office_image) {
            $office->office_image->delete();
        }

        return redirect()->route('admin.offices.index');
    }

    public function show(Office $office)
    {
        abort_if(Gate::denies('office_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $office->load('country', 'team');

        return view('admin.offices.show', compact('office'));
    }

    public function destroy(Office $office)
    {
        abort_if(Gate::denies('office_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $office->delete();

        return back();
    }

    public function massDestroy(MassDestroyOfficeRequest $request)
    {
        Office::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('office_create') && Gate::denies('office_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Office();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
