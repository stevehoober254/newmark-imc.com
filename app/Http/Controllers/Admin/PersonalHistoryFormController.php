<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPersonalHistoryFormRequest;
use App\Models\PersonalHistoryForm;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PersonalHistoryFormController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('personal_history_form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $personalHistoryForms = PersonalHistoryForm::with(['team'])->get();

        return view('admin.personalHistoryForms.index', compact('personalHistoryForms'));
    }

    public function show(PersonalHistoryForm $personalHistoryForm)
    {
        abort_if(Gate::denies('personal_history_form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $personalHistoryForm->load('team');

        return view('admin.personalHistoryForms.show', compact('personalHistoryForm'));
    }

    public function destroy(PersonalHistoryForm $personalHistoryForm)
    {
        abort_if(Gate::denies('personal_history_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $personalHistoryForm->delete();

        return back();
    }

    public function massDestroy(MassDestroyPersonalHistoryFormRequest $request)
    {
        PersonalHistoryForm::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('personal_history_form_create') && Gate::denies('personal_history_form_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new PersonalHistoryForm();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
