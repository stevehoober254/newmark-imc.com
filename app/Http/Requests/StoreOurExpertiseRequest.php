<?php

namespace App\Http\Requests;

use App\Models\OurExpertise;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOurExpertiseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('our_expertise_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:our_expertises',
            ],
            'expertise_logo' => [
                'required',
            ],
            'image' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'client_logos' => [
                'array',
            ],
        ];
    }
}
