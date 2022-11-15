<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreSectorRequest;
use App\Http\Requests\UpdateSectorRequest;
use App\Http\Resources\Admin\SectorResource;
use App\Models\Sector;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SectorApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('sector_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SectorResource(Sector::with(['team'])->get());
    }

    public function store(StoreSectorRequest $request)
    {
        $sector = Sector::create($request->all());

        if ($request->input('image', false)) {
            $sector->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        return (new SectorResource($sector))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Sector $sector)
    {
        abort_if(Gate::denies('sector_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SectorResource($sector->load(['team']));
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

        return (new SectorResource($sector))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Sector $sector)
    {
        abort_if(Gate::denies('sector_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sector->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
