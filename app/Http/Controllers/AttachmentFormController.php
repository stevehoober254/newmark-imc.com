<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttachmentFormRequest;
use App\Models\AttachmentForm;
use Illuminate\Http\Request;

class AttachmentFormController extends Controller
{
    public function show()
    {
        return view('public.attachment-form');
    }

    public function store(StoreAttachmentFormRequest $request)
    {
        AttachmentForm::create($request->validated());

        return redirect()->route('careers')->with('success', 'Your attachment application has been submitted successfully!');
    }
}
