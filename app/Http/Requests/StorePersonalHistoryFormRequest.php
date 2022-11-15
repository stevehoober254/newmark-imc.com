<?php

namespace App\Http\Requests;

use App\Models\PersonalHistoryForm;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePersonalHistoryFormRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('personal_history_form_create');
    }

    public function rules()
    {
        return [
            'full_name' => [
                'string',
                'required',
            ],
            'age' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'nationality' => [
                'string',
                'required',
            ],
            'gender' => [
                'string',
                'required',
            ],
            'marital_status' => [
                'string',
                'required',
            ],
            'current_physical_address' => [
                'string',
                'required',
            ],
            'email_address' => [
                'required',
                'unique:personal_history_forms',
            ],
            'phone_number' => [
                'string',
                'required',
            ],
            'highest_level_of_education' => [
                'string',
                'nullable',
            ],
            'field_of_study' => [
                'string',
                'nullable',
            ],
            'institution' => [
                'string',
                'nullable',
            ],
            'date_of_graduation' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'high_school_grade' => [
                'string',
                'nullable',
            ],
            'number_of_employees_supervised' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'start_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'end_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'company_name' => [
                'string',
                'nullable',
            ],
            'number_of_employees_supervised_pd' => [
                'string',
                'nullable',
            ],
        ];
    }
}
