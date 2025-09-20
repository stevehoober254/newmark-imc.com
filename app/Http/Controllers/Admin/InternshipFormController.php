<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InternshipForm;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InternshipFormController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('internship_form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $internshipForms = InternshipForm::orderBy('created_at', 'desc')->get();

        return view('admin.internshipForms.index', compact('internshipForms'));
    }

    public function show(InternshipForm $internshipForm)
    {
        abort_if(Gate::denies('internship_form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.internshipForms.show', compact('internshipForm'));
    }

    public function destroy(InternshipForm $internshipForm)
    {
        abort_if(Gate::denies('internship_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $internshipForm->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        InternshipForm::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
