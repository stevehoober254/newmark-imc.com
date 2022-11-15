<?php

namespace App\Http\Requests;

use App\Models\OurExpertise;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOurExpertiseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('our_expertise_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:our_expertises,title,' . request()->route('our_expertise')->id,
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
