<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttachmentForm;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AttachmentFormController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('attachment_form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attachmentForms = AttachmentForm::orderBy('created_at', 'desc')->get();

        return view('admin.attachmentForms.index', compact('attachmentForms'));
    }

    public function show(AttachmentForm $attachmentForm)
    {
        abort_if(Gate::denies('attachment_form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.attachmentForms.show', compact('attachmentForm'));
    }

    public function destroy(AttachmentForm $attachmentForm)
    {
        abort_if(Gate::denies('attachment_form_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $attachmentForm->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        AttachmentForm::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
