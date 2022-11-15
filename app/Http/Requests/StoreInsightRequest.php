<?php

namespace App\Http\Requests;

use App\Models\Insight;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreInsightRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('insight_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:insights',
            ],
            'image' => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
