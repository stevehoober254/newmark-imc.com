@extends('layouts.public')
@section('title')
    Personal History Form
@endsection
@section('content')
    <div class="newmark-careers">
        <div class="careers-top-header" style="background-image: url('{{ asset('img/top-bg.png') }}')">
            <div class="careers-bg">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-md-6 pb-5">
                            <h1>
                                Personal History Form
                            </h1>
                            <p>
                                Have interest in joining our team? Fill in the form below that allows you
                                to express interest in joining Newmark Group Limited.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="thick module-2 bright-red-background" data-aos="fade-right" data-id="module-solid_line-2" id="content-2" />

        <div class="pt-4 mb-5 personal-history">
            <div class="container">
                <div class="personal-history-instruction card mb-4 shadow-sm">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="text-center">Before you fill the form, please note the following:</h5>
                        </div>
                        <div class="col-md-12 m-auto">
                            <ul>
                                <li>
                                    Please complete the form honestly, answering all sections fully.
                                </li>
                                <li>
                                    By filling this form, you signify that you consent to the use of this data according to
                                    our <a href="">data Protection and Privacy Policy</a>.
                                </li>
                                <li>
                                    Please note that the information you provide will be used to assess your suitability for
                                    the position you are applying for.
                                </li>
                                <li>
                                    Please note that you are only allowed to fill this form once and you will not be able to
                                    edit it.
                                </li>
                                <li>
                                    Ensure you have a good internet connection before filling the form to avoid losing your
                                    progress.
                                </li>
                                <li>
                                    All fields marked with an asterisk (<span class="text-danger">*</span>) throughout this
                                    registration form are mandatory.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="row mb-2">
                                <div class="col-lg-12">
                                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                                </div>
                            </div>
                        @endif
                        @if ($errors->count() > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="card border-none ">
                    <div class="row">
                        @if ($step == 1)
                            <div class="col-md-6">
                                <div class="personal-history-img-wrapper">
                                    <div class="bg-light-dark">
                                        <div class="personal-history-content">
                                            <h2 class="text-white text-uppercase">Newmark Careers</h2>
                                            <h4 class="text-white">Think Exceptional | Be Exceptional</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-right">
                                <form action="{{ route('personal.historyform.step1') }}" method="POST">
                                    @csrf
                                    <h3>Step 1 of 5</h3>
                                    <h5>PERSONAL INFORMATION</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label required">Full Name</label>
                                                <input type="text" class="form-control" name="full_name"
                                                    value="{{ old('full_name', '') }}" id="name"
                                                    placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label required">Email
                                                    address</label>
                                                <input type="email" class="form-control" name="email_address"
                                                    value="{{ old('email_address', '') }}" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone_number" class="form-label required">Phone Number</label>
                                                <input type="number" class="form-control" id=""
                                                    name="phone_number" value="{{ old('phone_number', '') }}"
                                                    placeholder="Phone Number" minlength="10" maxlength="15">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="age" class="form-label required">Age</label>
                                                <input type="number" class="form-control" name="age"
                                                    value="{{ old('age', '') }}" id="age" placeholder="Age">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="age" class="form-label required">Nationality</label>
                                                <input type="text" class="form-control" name="nationality"
                                                    value="{{ old('nationality', '') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label required">Gender</label>
                                                <select class="form-control" id="gender" name="gender" required>
                                                    <option value="" disabled selected>--Select gender --</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="marital_status" class="form-label required">Marital
                                                    Status</label>
                                                <select class="form-control" id="marital_status" name="marital_status"
                                                    required>
                                                    <option value="" disabled selected>--Select Marital Status --
                                                    </option>
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                    <option value="Separated">Separated</option>
                                                    <option value="rather not say">Rather not Say</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="current_physical_address" class="form-label required">Current
                                                    Physical
                                                    Address</label>
                                                <input type="text" class="form-control"
                                                    name="current_physical_address"
                                                    value="{{ old('current_physical_address', '') }}"
                                                    id="current_physical_address" placeholder="Current Physical Address">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Next Step</button>
                                </form>
                            </div>
                        @elseif($step == 2)
                            <div class="col-md-12 form-right form-step">
                                <form
                                    action="{{ route('personal.historyform.step.post', ['slug' => $slug, 'step' => $step]) }}"
                                    method="POST">
                                    @csrf
                                    <h3>Step 2 of 5</h3>
                                    <h5>EDUCATIONAL BACKGROUND</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="highest_level_of_education"
                                                    class="form-label required">Highest Level of Education</label>
                                                <select class="form-control" id="highest_level_of_education"
                                                    name="highest_level_of_education" required>
                                                    <option value="" disabled selected>--Select Highest Level of
                                                        Education --</option>
                                                    <option value="Certificate">Certificate</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Degree">Degree/Undergraduate</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="PhD">PhD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="field_of_study" class="form-label required">Field of
                                                    Study</label>
                                                <input type="text" class="form-control" name="field_of_study"
                                                    value="{{ old('field_of_study', '') }}" id="field_of_study"
                                                    placeholder="Field of Study">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="institution" class="form-label required">Institution</label>
                                                <input type="text" class="form-control" name="institution"
                                                    value="{{ old('institution', '') }}" id="institution"
                                                    placeholder="Institution">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="date_of_graduation" class="form-label required">Date of
                                                    Graduatio</label>
                                                <input type="date" class="form-control" id="date_of_graduation"
                                                    name="date_of_graduation"
                                                    value="{{ old('date_of_graduation', '') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="award_achieved" class="form-label required">Award
                                                    Achieved</label>
                                                <input type="text" class="form-control" name="award_achieved"
                                                    value="{{ old('award_achieved', '') }}" id="award_achieved"
                                                    placeholder="Award Achieved">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="high_school_grade" class="form-label required">High School
                                                    Grade</label>
                                                <input type="text" class="form-control" name="high_school_grade"
                                                    value="{{ old('high_school_grade', '') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Next Step</button>
                                </form>
                            </div>
                        @elseif($step == 3)
                            <div class="col-md-12 form-right form-step">
                                <form
                                    action="{{ route('personal.historyform.step.post', ['slug' => $slug, 'step' => $step]) }}"
                                    method="POST">
                                    @csrf
                                    <h3>Step 3 of 5</h3>
                                    <h5 class="text-uppercase">Leadership Experiences/Qualities</h5>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label for="highest_level_of_education" class="form-label required">What
                                                    are some of your leadership experiences and qualities?</label>
                                                <textarea name="leadership_quality" class="form-control" id="leadership_quality" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Next Step</button>
                                </form>
                            </div>
                        @elseif($step == 4)
                            <div class="col-md-12 form-right form-step">
                                <form
                                    action="{{ route('personal.historyform.step.post', ['slug' => $slug, 'step' => $step]) }}"
                                    method="POST">
                                    @csrf
                                    <h3>Step 4 of 5</h3>
                                    <h5 class="text-uppercase">WORK EXPERIENCE/Professional Background</h5>
                                    <div class="row">

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Next Step</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
