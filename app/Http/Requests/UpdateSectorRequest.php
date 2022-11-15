<?php

namespace App\Http\Requests;

use App\Models\Sector;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSectorRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sector_edit');
    }

    public function rules()
    {
        return [
            'sector_name' => [
                'string',
                'required',
                'unique:sectors,sector_name,' . request()->route('sector')->id,
            ],
            'image' => [
                'required',
            ],
        ];
    }
}
