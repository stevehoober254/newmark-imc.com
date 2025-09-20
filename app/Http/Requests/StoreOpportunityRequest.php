<?php

namespace App\Http\Requests;

use App\Models\Opportunity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOpportunityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('opportunity_create');
    }

    public function rules()
    {
        return [
            'job_title' => [
                'string',
                'required',
                'unique:opportunities',
            ],
            'category' => [
                'required',
            ],
            'expertise_area_id' => [
                'required',
                'integer',
            ],
            'reporting_to' => [
                'string',
                'required',
            ],
            'location_id' => [
                'integer',
            ],
            'job_purpose' => [
                'string',
                'nullable',
            ],
            'key_responsibility' => [
                'required',
            ],
            'qualification' => [
                'required',
            ],
            'how_to_apply' => [
                'required',
            ],
        ];
    }
}
