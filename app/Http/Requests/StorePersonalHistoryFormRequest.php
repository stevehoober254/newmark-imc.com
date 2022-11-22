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
                'string',
                'nullable',
            ],
            'high_school_grade' => [
                'string',
                'nullable',
            ],
            'practice_area_you_are_interested_in' => [
                'string',
                'nullable',
            ],
            'skills' => [
                'string',
                'nullable',
            ],
            'type_of_engagement' => [
                'string',
                'nullable',
            ],
            'preferred_workstation' => [
                'string',
                'nullable',
            ],
            'organization_one' => [
                'string',
                'nullable',
            ],
            'number_of_employees_supervised_one' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'start_date_one' => [
                'string',
                'nullable',
            ],
            'end_date_one' => [
                'string',
                'nullable',
            ],
            'organization_two' => [
                'string',
                'nullable',
            ],
            'number_of_employees_supervised_two' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'start_date_two' => [
                'string',
                'nullable',
            ],
            'end_date_two' => [
                'string',
                'nullable',
            ],
            'organization_three' => [
                'string',
                'nullable',
            ],
            'number_of_employees_supervised_three' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'start_date_three' => [
                'string',
                'nullable',
            ],
            'end_date_three' => [
                'string',
                'nullable',
            ],
        ];
    }
}
