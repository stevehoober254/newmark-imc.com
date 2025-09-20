<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyInsightRequest;
use App\Http\Requests\StoreInsightRequest;
use App\Http\Requests\UpdateInsightRequest;
use App\Models\Insight;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class InsightController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('insight_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $insights = Insight::with(['team', 'media'])->get();

        return view('admin.insights.index', compact('insights'));
    }

    public function create()
    {
        abort_if(Gate::denies('insight_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.insights.create');
    }

    public function store(StoreInsightRequest $request)
    {
        $request->merge(['slug' => Str::slug($request->title, '-')]);
        $insight = Insight::create($request->all());

        if ($request->input('image', false)) {
            $insight->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $insight->id]);
        }

        return redirect()->route('admin.insights.index');
    }

    public function edit(Insight $insight)
    {
        abort_if(Gate::denies('insight_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $insight->load('team');

        return view('admin.insights.edit', compact('insight'));
    }

    public function update(UpdateInsightRequest $request, Insight $insight)
    {
        $request->merge(['slug' => Str::slug($request->title, '-')]);
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

        return redirect()->route('admin.insights.index');
    }

    public function show(Insight $insight)
    {
        abort_if(Gate::denies('insight_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $insight->load('team');

        return view('admin.insights.show', compact('insight'));
    }

    public function destroy(Insight $insight)
    {
        abort_if(Gate::denies('insight_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $insight->delete();

        return back();
    }

    public function massDestroy(MassDestroyInsightRequest $request)
    {
        Insight::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('insight_create') && Gate::denies('insight_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Insight();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
