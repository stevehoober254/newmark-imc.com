@extends('layouts.public')
@section('title')
Internship Application Form
@endsection
@section('content')
<div class="newmark-careers">
    <div class="careers-top-header" style="background-image: url('{{ asset('img/top-bg.png') }}')">
        <div class="careers-bg">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-6 pb-5">
                        <h1>
                            Newmark Internship Application Form
                        </h1>
                        <p>
                            Please complete all required fields (*) carefully. Ensure you have a stable internet
                            connection.
                            Once submitted, you cannot edit your responses. Estimated completion time: ~10 minutes.
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

            <form action="{{ route('internship.form.store') }}" method="POST" class="card shadow-sm">
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
                            <label for="email_address" class="form-label">Email Address (Use a professional email)
                                *</label>
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
                        <div class="col-md-6 mb-3">
                            <label for="marital_status" class="form-label">Marital Status *</label>
                            <select class="form-control @error('marital_status') is-invalid @enderror"
                                id="marital_status" name="marital_status" required>
                                <option value="">Select Marital Status</option>
                                <option value="Single" {{ old('marital_status')=='Single' ? 'selected' : '' }}>Single
                                </option>
                                <option value="Married" {{ old('marital_status')=='Married' ? 'selected' : '' }}>Married
                                </option>
                                <option value="Divorced" {{ old('marital_status')=='Divorced' ? 'selected' : '' }}>
                                    Divorced</option>
                                <option value="Widowed" {{ old('marital_status')=='Widowed' ? 'selected' : '' }}>Widowed
                                </option>
                                <option value="Rather not say" {{ old('marital_status')=='Rather not say' ? 'selected'
                                    : '' }}>Rather not say</option>
                            </select>
                            @error('marital_status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
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
                    <h4 class="mb-4">🔹 Academic Background (Internship Focus)</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="university_institution" class="form-label">University / Institution *</label>
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
                            <label for="year_of_study" class="form-label">Year of Study / Graduation Year *</label>
                            <input type="text" class="form-control @error('year_of_study') is-invalid @enderror"
                                id="year_of_study" name="year_of_study" value="{{ old('year_of_study') }}" required>
                            @error('year_of_study')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="academic_achievements" class="form-label">Key Academic Achievements / Relevant
                                Coursework</label>
                            <textarea class="form-control @error('academic_achievements') is-invalid @enderror"
                                id="academic_achievements" name="academic_achievements"
                                rows="2">{{ old('academic_achievements') }}</textarea>
                            @error('academic_achievements')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-4">🔹 Internship & Skills Snapshot</h4>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="previous_experience" class="form-label">Previous Internship / Volunteer
                                Experience (if any)</label>
                            <textarea class="form-control @error('previous_experience') is-invalid @enderror"
                                id="previous_experience" name="previous_experience"
                                rows="3">{{ old('previous_experience') }}</textarea>
                            @error('previous_experience')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="technical_skills" class="form-label">Technical / Professional Skills (e.g., MS
                                Office, Canva, SPSS, Communication)</label>
                            <textarea class="form-control @error('technical_skills') is-invalid @enderror"
                                id="technical_skills" name="technical_skills"
                                rows="3">{{ old('technical_skills') }}</textarea>
                            @error('technical_skills')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="languages_spoken" class="form-label">Languages Spoken</label>
                            <textarea class="form-control @error('languages_spoken') is-invalid @enderror"
                                id="languages_spoken" name="languages_spoken"
                                rows="2">{{ old('languages_spoken') }}</textarea>
                            @error('languages_spoken')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-4">🔹 Career Interests & Motivation</h4>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="why_interested" class="form-label">Why are you interested in interning with
                                Newmark? *</label>
                            <textarea class="form-control @error('why_interested') is-invalid @enderror"
                                id="why_interested" name="why_interested" rows="4"
                                required>{{ old('why_interested') }}</textarea>
                            @error('why_interested')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="career_aspirations" class="form-label">What are your career aspirations or
                                learning goals during this internship? *</label>
                            <textarea class="form-control @error('career_aspirations') is-invalid @enderror"
                                id="career_aspirations" name="career_aspirations" rows="4"
                                required>{{ old('career_aspirations') }}</textarea>
                            @error('career_aspirations')
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

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="declaration2" required>
                        <label class="form-check-label" for="declaration2">
                            I consent to the use of my information for the purposes of internship recruitment in line
                            with Newmark's privacy policy.
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