<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreOfficeRequest;
use App\Http\Requests\UpdateOfficeRequest;
use App\Http\Resources\Admin\OfficeResource;
use App\Models\Office;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OfficeApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('office_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OfficeResource(Office::with(['country', 'team'])->get());
    }

    public function store(StoreOfficeRequest $request)
    {
        $office = Office::create($request->all());

        if ($request->input('office_image', false)) {
            $office->addMedia(storage_path('tmp/uploads/' . basename($request->input('office_image'))))->toMediaCollection('office_image');
        }

        return (new OfficeResource($office))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Office $office)
    {
        abort_if(Gate::denies('office_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OfficeResource($office->load(['country', 'team']));
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

        return (new OfficeResource($office))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Office $office)
    {
        abort_if(Gate::denies('office_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $office->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
