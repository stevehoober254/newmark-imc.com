<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInternshipFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => 'required|string|max:255',
            'preferred_name' => 'nullable|string|max:255',
            'email_address' => 'required|email|max:255',
            'phone_number' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'marital_status' => 'required|string|max:255',
            'current_address' => 'required|string',
            'university_institution' => 'required|string|max:255',
            'course_of_study' => 'required|string|max:255',
            'year_of_study' => 'required|string|max:255',
            'academic_achievements' => 'nullable|string',
            'previous_experience' => 'nullable|string',
            'technical_skills' => 'nullable|string',
            'languages_spoken' => 'nullable|string',
            'why_interested' => 'required|string',
            'career_aspirations' => 'required|string',
            'signature_name' => 'required|string|max:255',
            'signature_date' => 'required|date',
        ];
    }
}
