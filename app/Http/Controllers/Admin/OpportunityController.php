<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOpportunityRequest;
use App\Http\Requests\StoreOpportunityRequest;
use App\Http\Requests\UpdateOpportunityRequest;
use App\Models\Country;
use App\Models\Opportunity;
use App\Models\OurExpertise;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OpportunityController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('opportunity_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $opportunities = Opportunity::with(['expertise_area', 'location', 'team'])->get();

        return view('admin.opportunities.index', compact('opportunities'));
    }

    public function create()
    {
        abort_if(Gate::denies('opportunity_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $expertise_areas = OurExpertise::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.opportunities.create', compact('expertise_areas', 'locations'));
    }

    public function store(StoreOpportunityRequest $request)
    {
        $opportunity = Opportunity::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $opportunity->id]);
        }

        return redirect()->route('admin.opportunities.index');
    }

    public function edit(Opportunity $opportunity)
    {
        abort_if(Gate::denies('opportunity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $expertise_areas = OurExpertise::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Country::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $opportunity->load('expertise_area', 'location', 'team');

        return view('admin.opportunities.edit', compact('expertise_areas', 'locations', 'opportunity'));
    }

    public function update(UpdateOpportunityRequest $request, Opportunity $opportunity)
    {
        $opportunity->update($request->all());

        return redirect()->route('admin.opportunities.index');
    }

    public function show(Opportunity $opportunity)
    {
        abort_if(Gate::denies('opportunity_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $opportunity->load('expertise_area', 'location', 'team');

        return view('admin.opportunities.show', compact('opportunity'));
    }

    public function destroy(Opportunity $opportunity)
    {
        abort_if(Gate::denies('opportunity_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $opportunity->delete();

        return back();
    }

    public function massDestroy(MassDestroyOpportunityRequest $request)
    {
        Opportunity::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('opportunity_create') && Gate::denies('opportunity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Opportunity();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
