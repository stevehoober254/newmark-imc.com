<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreInsightRequest;
use App\Http\Requests\UpdateInsightRequest;
use App\Http\Resources\Admin\InsightResource;
use App\Models\Insight;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InsightApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('insight_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InsightResource(Insight::with(['team'])->get());
    }

    public function store(StoreInsightRequest $request)
    {
        $insight = Insight::create($request->all());

        if ($request->input('image', false)) {
            $insight->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        return (new InsightResource($insight))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Insight $insight)
    {
        abort_if(Gate::denies('insight_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InsightResource($insight->load(['team']));
    }

    public function update(UpdateInsightRequest $request, Insight $insight)
    {
        $insight->update($request->all());

        if ($request->input('image', false)) {
            if (!$insight->image || $request->input('image') !== $insight->image->file_name) {
                if ($insight->image) {
                    $insight->image->delete();
                }
                $insight->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($insight->image) {
            $insight->image->delete();
        }

        return (new InsightResource($insight))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Insight $insight)
    {
        abort_if(Gate::denies('insight_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $insight->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
