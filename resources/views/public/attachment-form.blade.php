@extends('layouts.public')
@section('title')
Attachment Application Form
@endsection
@section('content')
<div class="newmark-careers">
    <div class="careers-top-header" style="background-image: url('{{ asset('img/top-bg.png') }}')">
        <div class="careers-bg">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-6 pb-5">
                        <h1>
                            Newmark Attachment Application Form
                        </h1>
                        <p>
                            Please complete all required fields (*) carefully. Attach a copy of your student ID and
                            school introduction letter if requested.
                            Ensure accuracy—once submitted, you cannot edit. Estimated completion time: ~8–10 minutes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="thick module-2 bright-red-background" data-aos="fade-right" data-id="module-solid_line-2"
        id="content-2" />

    <div class="pt-4 mb-5">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <form action="{{ route('attachment.form.store') }}" method="POST" class="card shadow-sm">
                @csrf
                <div class="card-body p-4">
                    <h4 class="mb-4">🔹 Personal Information</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="full_name" class="form-label">Full Name (First & Last) *</label>
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror"
                                id="full_name" name="full_name" value="{{ old('full_name') }}" required>
                            @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="preferred_name" class="form-label">Preferred Name (Optional)</label>
                            <input type="text" class="form-control @error('preferred_name') is-invalid @enderror"
                                id="preferred_name" name="preferred_name" value="{{ old('preferred_name') }}">
                            @error('preferred_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email_address" class="form-label">Email Address (Use your school or professional
                                email) *</label>
                            <input type="email" class="form-control @error('email_address') is-invalid @enderror"
                                id="email_address" name="email_address" value="{{ old('email_address') }}" required>
                            @error('email_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone_number" class="form-label">Phone Number (Most reachable, with country
                                code) *</label>
                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
                            @error('phone_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="date_of_birth" class="form-label">Date of Birth / Age *</label>
                            <input type="text" class="form-control @error('date_of_birth') is-invalid @enderror"
                                id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                            @error('date_of_birth')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="nationality" class="form-label">Nationality *</label>
                            <input type="text" class="form-control @error('nationality') is-invalid @enderror"
                                id="nationality" name="nationality" value="{{ old('nationality') }}" required>
                            @error('nationality')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="gender" class="form-label">Gender *</label>
                            <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender"
                                required>
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender')=='Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender')=='Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ old('gender')=='Other' ? 'selected' : '' }}>Other</option>
                                <option value="Prefer not to say" {{ old('gender')=='Prefer not to say' ? 'selected'
                                    : '' }}>Prefer not to say</option>
                            </select>
                            @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="current_address" class="form-label">Current Address (City, Town, or Residence)
                                *</label>
                            <textarea class="form-control @error('current_address') is-invalid @enderror"
                                id="current_address" name="current_address" rows="2"
                                required>{{ old('current_address') }}</textarea>
                            @error('current_address')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-4">🔹 Academic Background</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="university_institution" class="form-label">University / College / Institution
                                *</label>
                            <input type="text"
                                class="form-control @error('university_institution') is-invalid @enderror"
                                id="university_institution" name="university_institution"
                                value="{{ old('university_institution') }}" required>
                            @error('university_institution')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="course_of_study" class="form-label">Course of Study *</label>
                            <input type="text" class="form-control @error('course_of_study') is-invalid @enderror"
                                id="course_of_study" name="course_of_study" value="{{ old('course_of_study') }}"
                                required>
                            @error('course_of_study')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="current_year_of_study" class="form-label">Current Year of Study (e.g., 2nd Year,
                                3rd Year) *</label>
                            <input type="text" class="form-control @error('current_year_of_study') is-invalid @enderror"
                                id="current_year_of_study" name="current_year_of_study"
                                value="{{ old('current_year_of_study') }}" required>
                            @error('current_year_of_study')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="expected_graduation_year" class="form-label">Expected Graduation Year *</label>
                            <input type="text"
                                class="form-control @error('expected_graduation_year') is-invalid @enderror"
                                id="expected_graduation_year" name="expected_graduation_year"
                                value="{{ old('expected_graduation_year') }}" required>
                            @error('expected_graduation_year')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="school_contact_person" class="form-label">School Contact Person / Supervisor
                                (Name & Email)</label>
                            <input type="text" class="form-control @error('school_contact_person') is-invalid @enderror"
                                id="school_contact_person" name="school_contact_person"
                                value="{{ old('school_contact_person') }}">
                            @error('school_contact_person')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-4">🔹 Attachment Details</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="attachment_period" class="form-label">Attachment Period (Start & End Dates)
                                *</label>
                            <input type="text" class="form-control @error('attachment_period') is-invalid @enderror"
                                id="attachment_period" name="attachment_period" value="{{ old('attachment_period') }}"
                                placeholder="e.g., January 15, 2024 - March 15, 2024" required>
                            @error('attachment_period')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="department_area_of_interest" class="form-label">Department / Area of Interest
                                (if known)</label>
                            <input type="text"
                                class="form-control @error('department_area_of_interest') is-invalid @enderror"
                                id="department_area_of_interest" name="department_area_of_interest"
                                value="{{ old('department_area_of_interest') }}">
                            @error('department_area_of_interest')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="learning_objectives" class="form-label">Learning Objectives (What
                                skills/experience do you hope to gain?) *</label>
                            <textarea class="form-control @error('learning_objectives') is-invalid @enderror"
                                id="learning_objectives" name="learning_objectives" rows="4"
                                required>{{ old('learning_objectives') }}</textarea>
                            @error('learning_objectives')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-4">🔹 Skills Snapshot</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="key_skills" class="form-label">Key Skills (e.g., Computer skills, Communication,
                                Teamwork)</label>
                            <textarea class="form-control @error('key_skills') is-invalid @enderror" id="key_skills"
                                name="key_skills" rows="3">{{ old('key_skills') }}</textarea>
                            @error('key_skills')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="languages_spoken" class="form-label">Languages Spoken</label>
                            <textarea class="form-control @error('languages_spoken') is-invalid @enderror"
                                id="languages_spoken" name="languages_spoken"
                                rows="3">{{ old('languages_spoken') }}</textarea>
                            @error('languages_spoken')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-4">🔹 Declaration</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="signature_name" class="form-label">Signature / Full Name *</label>
                            <input type="text" class="form-control @error('signature_name') is-invalid @enderror"
                                id="signature_name" name="signature_name" value="{{ old('signature_name') }}" required>
                            @error('signature_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="signature_date" class="form-label">Date *</label>
                            <input type="date" class="form-control @error('signature_date') is-invalid @enderror"
                                id="signature_date" name="signature_date" value="{{ old('signature_date') }}" required>
                            @error('signature_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="declaration1" required>
                        <label class="form-check-label" for="declaration1">
                            I confirm that the information provided is true and complete to the best of my knowledge.
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="declaration2" required>
                        <label class="form-check-label" for="declaration2">
                            I understand this attachment is for learning purposes and does not constitute full
                            employment.
                        </label>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="declaration3" required>
                        <label class="form-check-label" for="declaration3">
                            I consent to the use of my information for attachment placement in line with Newmark's
                            privacy policy.
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Submit Application</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection