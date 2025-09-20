<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInternshipFormRequest;
use App\Models\InternshipForm;
use Illuminate\Http\Request;

class InternshipFormController extends Controller
{
    public function show()
    {
        return view('public.internship-form');
    }

    public function store(StoreInternshipFormRequest $request)
    {
        InternshipForm::create($request->validated());

        return redirect()->route('careers')->with('success', 'Your internship application has been submitted successfully!');
    }
}
