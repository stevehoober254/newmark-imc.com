<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTestimonialRequest;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class TestimonialController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('testimonial_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testimonials = Testimonial::with(['team', 'media'])->get();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        abort_if(Gate::denies('testimonial_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.testimonials.create');
    }

    public function store(StoreTestimonialRequest $request)
    {
        $testimonial = Testimonial::create($request->all());

        if ($request->input('client_logo', false)) {
            $testimonial->addMedia(storage_path('tmp/uploads/' . basename($request->input('client_logo'))))->toMediaCollection('client_logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $testimonial->id]);
        }

        return redirect()->route('admin.testimonials.index');
    }

    public function edit(Testimonial $testimonial)
    {
        abort_if(Gate::denies('testimonial_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testimonial->load('team');

        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $testimonial->update($request->all());

        if ($request->input('client_logo', false)) {
            if (!$testimonial->client_logo || $request->input('client_logo') !== $testimonial->client_logo->file_name) {
                if ($testimonial->client_logo) {
                    $testimonial->client_logo->delete();
                }
                $testimonial->addMedia(storage_path('tmp/uploads/' . basename($request->input('client_logo'))))->toMediaCollection('client_logo');
            }
        } elseif ($testimonial->client_logo) {
            $testimonial->client_logo->delete();
        }

        return redirect()->route('admin.testimonials.index');
    }

    public function show(Testimonial $testimonial)
    {
        abort_if(Gate::denies('testimonial_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testimonial->load('team');

        return view('admin.testimonials.show', compact('testimonial'));
    }

    public function destroy(Testimonial $testimonial)
    {
        abort_if(Gate::denies('testimonial_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testimonial->delete();

        return back();
    }

    public function massDestroy(MassDestroyTestimonialRequest $request)
    {
        Testimonial::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('testimonial_create') && Gate::denies('testimonial_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Testimonial();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
