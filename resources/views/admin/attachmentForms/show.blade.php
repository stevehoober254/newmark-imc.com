@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        View Attachment Application
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.attachment-forms.index') }}">
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
                            {{ $attachmentForm->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Full Name
                        </th>
                        <td>
                            {{ $attachmentForm->full_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Preferred Name
                        </th>
                        <td>
                            {{ $attachmentForm->preferred_name ?? 'Not provided' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email Address
                        </th>
                        <td>
                            {{ $attachmentForm->email_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Phone Number
                        </th>
                        <td>
                            {{ $attachmentForm->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Date of Birth / Age
                        </th>
                        <td>
                            {{ $attachmentForm->date_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Nationality
                        </th>
                        <td>
                            {{ $attachmentForm->nationality }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                            {{ $attachmentForm->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Current Address
                        </th>
                        <td>
                            {{ $attachmentForm->current_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            University / College / Institution
                        </th>
                        <td>
                            {{ $attachmentForm->university_institution }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Course of Study
                        </th>
                        <td>
                            {{ $attachmentForm->course_of_study }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Current Year of Study
                        </th>
                        <td>
                            {{ $attachmentForm->current_year_of_study }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Expected Graduation Year
                        </th>
                        <td>
                            {{ $attachmentForm->expected_graduation_year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            School Contact Person / Supervisor
                        </th>
                        <td>
                            {{ $attachmentForm->school_contact_person ?? 'Not provided' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Attachment Period
                        </th>
                        <td>
                            {{ $attachmentForm->attachment_period }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Department / Area of Interest
                        </th>
                        <td>
                            {{ $attachmentForm->department_area_of_interest ?? 'Not specified' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Learning Objectives
                        </th>
                        <td>
                            {{ $attachmentForm->learning_objectives }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Key Skills
                        </th>
                        <td>
                            {{ $attachmentForm->key_skills ?? 'Not provided' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Languages Spoken
                        </th>
                        <td>
                            {{ $attachmentForm->languages_spoken ?? 'Not provided' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Signature / Full Name
                        </th>
                        <td>
                            {{ $attachmentForm->signature_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Signature Date
                        </th>
                        <td>
                            {{ $attachmentForm->signature_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Submitted Date
                        </th>
                        <td>
                            {{ $attachmentForm->created_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.attachment-forms.index') }}">
                    Back to List
                </a>
            </div>
        </div>
    </div>
</div>

@endsection