<?php

namespace App\Http\Requests;

use App\Models\Office;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOfficeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('office_create');
    }

    public function rules()
    {
        return [
            'country_id' => [
                'required',
                'integer',
            ],
            'city' => [
                'string',
                'required',
            ],
            'office_image' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'office_phone' => [
                'string',
                'nullable',
            ],
        ];
    }
}
