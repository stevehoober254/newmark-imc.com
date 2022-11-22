<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPersonalHistoryFormRequest;
use App\Models\PersonalHistoryForm;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonalHistoryFormController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('personal_history_form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $personalHistoryForms = PersonalHistoryForm::all();

        return view('admin.personalHistoryForms.index', compact('personalHistoryForms'));
    }

    public function show(PersonalHistoryForm $personalHistoryForm)
    {
        abort_if(Gate::denies('personal_history_form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
}
