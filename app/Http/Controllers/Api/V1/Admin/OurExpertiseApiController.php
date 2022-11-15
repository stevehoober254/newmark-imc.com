<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreOurExpertiseRequest;
use App\Http\Requests\UpdateOurExpertiseRequest;
use App\Http\Resources\Admin\OurExpertiseResource;
use App\Models\OurExpertise;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OurExpertiseApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('our_expertise_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OurExpertiseResource(OurExpertise::with(['team'])->get());
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

        return (new OurExpertiseResource($ourExpertise))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(OurExpertise $ourExpertise)
    {
        abort_if(Gate::denies('our_expertise_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OurExpertiseResource($ourExpertise->load(['team']));
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

        return (new OurExpertiseResource($ourExpertise))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(OurExpertise $ourExpertise)
    {
        abort_if(Gate::denies('our_expertise_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $ourExpertise->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
