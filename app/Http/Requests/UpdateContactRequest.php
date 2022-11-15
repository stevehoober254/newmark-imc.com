<?php

namespace App\Http\Requests;

use App\Models\Contact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'country_id' => [
                'required',
                'integer',
            ],
            'email' => [
                'required',
                'unique:contacts,email,' . request()->route('contact')->id,
            ],
            'phone' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'unique:contacts,phone,' . request()->route('contact')->id,
            ],
            'subject' => [
                'string',
                'required',
            ],
            'message' => [
                'required',
            ],
        ];
    }
}
