<?php

namespace App\Http\Requests;

use App\Models\Insight;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateInsightRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('insight_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'image' => [
                'required',
            ],
        ];
    }
}
