@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        View Internship Application
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.internship-forms.index') }}">
                    Back to List
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $internshipForm->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Full Name
                        </th>
                        <td>
                            {{ $internshipForm->full_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Preferred Name
                        </th>
                        <td>
                            {{ $internshipForm->preferred_name ?? 'Not provided' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email Address
                        </th>
                        <td>
                            {{ $internshipForm->email_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Phone Number
                        </th>
                        <td>
                            {{ $internshipForm->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Date of Birth / Age
                        </th>
                        <td>
                            {{ $internshipForm->date_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nationality
                        </th>
                        <td>
                            {{ $internshipForm->nationality }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                            {{ $internshipForm->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Marital Status
                        </th>
                        <td>
                            {{ $internshipForm->marital_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Current Address
                        </th>
                        <td>
                            {{ $internshipForm->current_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            University / Institution
                        </th>
                        <td>
                            {{ $internshipForm->university_institution }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Course of Study
                        </th>
                        <td>
                            {{ $internshipForm->course_of_study }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Year of Study / Graduation Year
                        </th>
                        <td>
                            {{ $internshipForm->year_of_study }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Academic Achievements / Relevant Coursework
                        </th>
                        <td>
                            {{ $internshipForm->academic_achievements ?? 'Not provided' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Previous Internship / Volunteer Experience
                        </th>
                        <td>
                            {{ $internshipForm->previous_experience ?? 'Not provided' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Technical / Professional Skills
                        </th>
                        <td>
                            {{ $internshipForm->technical_skills ?? 'Not provided' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Languages Spoken
                        </th>
                        <td>
                            {{ $internshipForm->languages_spoken ?? 'Not provided' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Why Interested in Interning with Newmark
                        </th>
                        <td>
                            {{ $internshipForm->why_interested }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Career Aspirations / Learning Goals
                        </th>
                        <td>
                            {{ $internshipForm->career_aspirations }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Signature / Full Name
                        </th>
                        <td>
                            {{ $internshipForm->signature_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Signature Date
                        </th>
                        <td>
                            {{ $internshipForm->signature_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Submitted Date
                        </th>
                        <td>
                            {{ $internshipForm->created_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.internship-forms.index') }}">
                    Back to List
                </a>
            </div>
        </div>
    </div>
</div>

@endsection