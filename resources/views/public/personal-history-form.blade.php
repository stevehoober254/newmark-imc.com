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
                @if ($step == 1)
                    <div class="personal-history-instruction card mb-4 shadow-sm">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="text-center">Before/when filling the form, please note the following:</h5>
                            </div>
                            <div class="col-md-12 m-auto">
                                <ul>
                                    <li>
                                        Please complete the form honestly, answering all sections fully.
                                    </li>
                                    <li>
                                        By filling this form, you signify that you consent to the use of this data according
                                        to the terms of our privacy policy.
                                    </li>
                                    <li>
                                        Please note that the information you provide will be used to assess your suitability
                                        for
                                        the position you are applying for.
                                    </li>
                                    <li>
                                        Please be aware that you may only complete this form once, and that once you move on
                                        to the next step, you will not be able to modify it.
                                    </li>
                                    <li>
                                        Ensure you have a good internet connection before filling the form to avoid losing
                                        your
                                        progress.
                                    </li>
                                    <li>
                                        It will take you about 10 minutes to fill the form.
                                    </li>
                                    <li>
                                        All fields marked with an asterisk (<span class="text-danger">*</span>) throughout
                                        this form are mandatory.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
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
                                    <h3>Step 1 of 6</h3>
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
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        onclick="return confirm('Before submitting this step, Confirm everything is correct?')">Next
                                        Step</button>
                                </form>
                            </div>
                        @elseif($step == 2)
                            <div class="col-md-12 form-right form-step">
                                <form
                                    action="{{ route('personal.historyform.step.post', ['slug' => $slug, 'step' => $step]) }}"
                                    method="POST">
                                    @csrf
                                    <h3>Step 2 of 6</h3>
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
                                                    Graduation</label>
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
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        onclick="return confirm('Before submitting this step, Confirm everything is correct?')">Next
                                        Step</button>
                                </form>
                            </div>
                        @elseif($step == 3)
                            <div class="col-md-12 form-right form-step">
                                <form
                                    action="{{ route('personal.historyform.step.post', ['slug' => $slug, 'step' => $step]) }}"
                                    method="POST">
                                    @csrf
                                    <h3>Step 3 of 6</h3>
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
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        onclick="return confirm('Before submitting this step, Confirm everything is correct?')">Next
                                        Step</button>
                                </form>
                            </div>
                        @elseif($step == 4)
                            <div class="col-md-12 form-right form-step">
                                <form
                                    action="{{ route('personal.historyform.step.post', ['slug' => $slug, 'step' => $step]) }}"
                                    method="POST">
                                    @csrf
                                    <h3>Step 4 of 6</h3>
                                    <p class="mt-3 mb-3">
                                        <small><strong>Please provide the information of at least one references on your
                                                Professional Background.</strong></small>
                                    </p>
                                    <h5 class="text-uppercase">WORK EXPERIENCE/Professional Background</h5>
                                    <div class="inner-card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 class="main-color">First Work Experience/Professional Background</h6>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="organization_one"
                                                        class="form-label required">Organization</label>
                                                    <input type="text" class="form-control" name="organization_one"
                                                        value="{{ old('organization_one', '') }}" id="organization_one"
                                                        placeholder="Organization">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="number_of_employees_supervised_one"
                                                        class="form-label required">Number of Employees Supervised</label>
                                                    <input type="number" class="form-control"
                                                        name="number_of_employees_supervised_one"
                                                        value="{{ old('number_of_employees_supervised_one', '') }}"
                                                        id="number_of_employees_supervised_one">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="start_date_one" class="form-label required">Start
                                                        Date</label>
                                                    <input type="date" class="form-control" name="start_date_one">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="end_date_one" class="form-label required">End Date</label>
                                                    <input type="date" class="form-control" name="end_date_one">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="description_of_the_roles_and_responsibilities_one"
                                                        class="form-label required">Description of the Roles and
                                                        Responsibilities</label>
                                                    <textarea name="description_of_the_roles_and_responsibilities_one" class="form-control"
                                                        id="description_of_the_roles_and_responsibilities_one" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="reason_for_leaving_one" class="form-label required">Reason
                                                        for
                                                        Leaving</label>
                                                    <textarea name="reason_for_leaving_one" class="form-control" id="reason_for_leaving_one" cols="30"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 class="main-color">Second Work Experience/Professional Background</h6>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="organization_two"
                                                        class="form-label">Organization</label>
                                                    <input type="text" class="form-control" name="organization_two"
                                                        value="{{ old('organization_two', '') }}" id="organization_two">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="number_of_employees_supervised_two"
                                                        class="form-label">Number of Employees Supervised</label>
                                                    <input type="number" class="form-control"
                                                        name="number_of_employees_supervised_two"
                                                        value="{{ old('number_of_employees_supervised_two', '') }}"
                                                        id="number_of_employees_supervised_two">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="start_date_two" class="form-label">Start
                                                        Date</label>
                                                    <input type="date" class="form-control" name="start_date_two">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="end_date_two" class="form-label">End Date</label>
                                                    <input type="date" class="form-control" name="end_date_two">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="description_of_the_roles_and_responsibilities_two"
                                                        class="form-label">Description of the Roles and
                                                        Responsibilities</label>
                                                    <textarea name="description_of_the_roles_and_responsibilities_two" class="form-control"
                                                        id="description_of_the_roles_and_responsibilities_two" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="reason_for_leaving_two" class="form-label">Reason
                                                        for
                                                        Leaving</label>
                                                    <textarea name="reason_for_leaving_two" class="form-control" id="reason_for_leaving_two" cols="30"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6 class="main-color">Third Work Experience/Professional Background</h6>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="organization_three"
                                                        class="form-label">Organization</label>
                                                    <input type="text" class="form-control" name="organization_three"
                                                        value="{{ old('organization_three', '') }}"
                                                        id="organization_three">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="number_of_employees_supervised_three"
                                                        class="form-label">Number of Employees Supervised</label>
                                                    <input type="number" class="form-control"
                                                        name="number_of_employees_supervised_three"
                                                        value="{{ old('number_of_employees_supervised_three', '') }}"
                                                        id="number_of_employees_supervised_three">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="start_date_three" class="form-label">Start
                                                        Date</label>
                                                    <input type="date" class="form-control" name="start_date_three">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-4">
                                                    <label for="end_date_three" class="form-label">End
                                                        Date</label>
                                                    <input type="date" class="form-control" name="end_date_three">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="description_of_the_roles_and_responsibilities_three"
                                                        class="form-label">Description of the Roles and
                                                        Responsibilities</label>
                                                    <textarea name="description_of_the_roles_and_responsibilities_three" class="form-control"
                                                        id="description_of_the_roles_and_responsibilities_three" cols="30" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <label for="reason_for_leaving_three"
                                                        class="form-label">Reason
                                                        for
                                                        Leaving</label>
                                                    <textarea name="reason_for_leaving_three" class="form-control" id="reason_for_leaving_three" cols="30"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        onclick="return confirm('Before submitting this step, Confirm everything is correct?')">Submit</button>
                                </form>
                            </div>
                        @elseif($step == 5)
                            <div class="col-md-12 form-right form-step">
                                <form
                                    action="{{ route('personal.historyform.step.post', ['slug' => $slug, 'step' => $step]) }}"
                                    method="POST">
                                    @csrf
                                    <h3>Step 5 of 6</h3>
                                    <h5 class="text-uppercase">Area of Interest/Practice area</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="highest_level_of_education"
                                                    class="form-label required">Practice area you are interested in</label>
                                                <select name="practice_area_you_are_interested_in"
                                                    id="practice_area_you_are_interested_in" class="form-control"
                                                    required>
                                                    <option value="" disabled selected>--Select Practice Area--
                                                    </option>
                                                    <option value="Public Relations">Public Relations</option>
                                                    <option value="Creative">Creative</option>
                                                    <option value="Digital">Digital</option>
                                                    <option value="Experiential">Experiential</option>
                                                    <option value="Insights">Insights</option>
                                                    <option value="Other/None of the above">Other/None of the above
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="type_of_engagement" class="form-label required">Type of
                                                    Engagement</label>
                                                <select name="type_of_engagement" id="type_of_engagement"
                                                    class="form-control" required>
                                                    <option value="" disabled selected>
                                                        --Select Type of Engagement--
                                                    </option>
                                                    <option value="Consultancy">Consultancy</option>
                                                    <option value="Full-time">Full-time</option>
                                                    <option value="Internship">Internship</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="preferred_workstation" class="form-label required">Preferred
                                                    Workstation</label>
                                                <select name="preferred_workstation" id="preferred_workstation"
                                                    class="form-control" required>
                                                    <option value="" disabled selected>
                                                        --Select Preferred Workstation--
                                                    </option>
                                                    <option value="Nairobi, Kenya">Nairobi, Kenya</option>
                                                    <option value="Accra, Ghana">Accra, Ghana</option>
                                                    <option value="Lagos, Nigeria">Lagos, Nigeria</option>
                                                    <option value="Dakar, Senegal">Dakar, Senegal</option>
                                                    <option value="Abidjan, Côte d’Ivoire">Abidjan, Côte d’Ivoire</option>
                                                    <option value="Bujumbura, Burundi">Bujumbura, Burundi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="salary_expectations" class="form-label required">Salary
                                                    Expectations</label>
                                                <input type="text" class="form-control" name="salary_expectations"
                                                    value="{{ old('salary_expectations', '') }}" id="salary_expectations"
                                                    placeholder="Include Currency">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="skills" class="form-label required">Skills</label>
                                                <textarea name="skills" id="skills" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="why_would_you_like_to_join_our_team"
                                                    class="form-label required">Why would you
                                                    like to join our team?</label>
                                                <textarea name="why_would_you_like_to_join_our_team" id="why_would_you_like_to_join_our_team" cols="30"
                                                    rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        onclick="return confirm('Before submitting this step, Confirm everything is correct?')">Final
                                        Step</button>
                                </form>
                            </div>
                        @elseif($step == 6)
                            <div class="col-md-12 form-right form-step">
                                <form
                                    action="{{ route('personal.historyform.step.post', ['slug' => $slug, 'step' => $step]) }}"
                                    method="POST">
                                    @csrf
                                    <h3>Step 6 of 6</h3>
                                    <h5 class="text-uppercase">Social Media</h5>
                                    <p>
                                        <small><strong>Please provide links to your Social Media handles or any personal
                                                website</strong></small>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="facebook_url" class="form-label required">Facebook</label>
                                                <input type="url" class="form-control" name="facebook_url"
                                                    value="{{ old('facebook_url', '') }}" id="facebook_url"
                                                    placeholder="Eg https://facebook.com/johndoe">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="twitter_url" class="form-label required">Twitter</label>
                                                <input type="url" class="form-control" name="twitter_url"
                                                    value="{{ old('twitter_url', '') }}" id="twitter_url"
                                                    placeholder="Eg https://twitter.com/johndoe">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="linked_in_url" class="form-label required">LinkedIn</label>
                                                <input type="url" class="form-control" name="linked_in_url"
                                                    value="{{ old('linked_in_url', '') }}" id="linked_in_url"
                                                    placeholder="Eg linkedin.com/in/johndoe">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="do_you_have_personal_website" class="form-label required">Do
                                                    you have personal website?</label>
                                                <select name="do_you_have_personal_website"
                                                    id="do_you_have_personal_website" class="form-control" required>
                                                    <option value="" disabled selected>
                                                        --Select--
                                                    </option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="portfolio_url" class="form-label">If yes, Please provide
                                                    information about your personal website (s) such as url(s).</label>
                                                <textarea name="portfolio_url" id="portfolio_url" cols="30" rows="5" class="form-control"
                                                    placeholder="Eg https://newmark-imc.com"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label for="other_links_works" class="form-label">Please provide links, If
                                                    any to portfolio or work you have done.</label>
                                                <textarea name="other_links_works" id="other_links_works" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        onclick="return confirm('Before submitting for review, Confirm everything is correct?')">Submit
                                        for review</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
