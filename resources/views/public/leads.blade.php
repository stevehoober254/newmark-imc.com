@extends('layouts.public')
@section('title')
    Leads - Newmark Leads
@endsection
@section('content')

<div class="leadform container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-6 col-lg-7 col-md-8 col-9 text-center">
                <h3 class="text-white">Download Full Report</h3>
                <p class="blue-text text-white">Just answer a few questions<br> so that we can personalize the right
                    experience for
                    you.</p>
                <div class="card">
                    <h5 class="text-center mb-4">Powering world-class companies</h5>
                    <form class="form-card" id="leadForm">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label">First
                                    name<span class="text-danger">
                                        *</span></label> <input type="text" id="first_name" name="first_name"
                                    placeholder="Enter your first name" onblur="validate(1)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label">Last
                                    name<span class="text-danger"> *</span></label>
                                <input type="text" id="last_name" name="last_name" placeholder="Enter your last name"
                                    onblur="validate(2)">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label">Business email<span class="text-danger">
                                        *</span></label> <input type="text" id="email" name="email" placeholder=""
                                    onblur="validate(3)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label">Phone
                                    number<span class="text-danger">
                                        *</span></label> <input type="text" id="mob" name="mob" placeholder=""
                                    onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label
                                    class="form-control-label">Company Name<span class="text-danger">
                                        *</span></label> <input type="text" id="company" name="company" placeholder=""
                                    onblur="validate(5)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label">Job
                                    Title<span class="text-danger">
                                        *</span></label> <input type="text" id="job" name="job" placeholder=""
                                    onblur="validate(6)"> </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="form-group col-sm-6"> <button type="submit"
                                    class="btn-block btn-primary">Download Media report</button> </div>
                        </div>
                        <div class="text-danger font-weight-bold d-none" id="leadform-error">
                            <p>The download for this media report is presently unavailable. Please attempt the download
                                again later.
                            </p>
                        </div>
                        <div class="text-success font-weight-bold d-none" id="leadform-success">
                            <p>Thank you for patience. You dowload will start soon. Click link below if takes too
                                long.<br />
                                <a href="/'" target="_blank" download>Download link</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="leadform-loader d-none" id="leadform-loader">
        <span class="loader"></span>
    </div>
 @endsection
