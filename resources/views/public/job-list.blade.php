@extends('layouts.public')
@section('content')
    <div class="newmark-careers">
        <div class="careers-top-header" style="background-image: url('{{ asset('img/top-bg.png') }}')">
            <div class="careers-bg">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-md-6 pb-5">
                            <h1>
                                Find The Job That Fits Your Career
                            </h1>
                            <p>
                                Search or view our top Jobs here at Newmark
                            </p>
                            <form class="search-job mt-5">
                                <div class="row justify-content-center justify-content-md-between g-0">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Job title or Keywords"
                                            name="query">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary text-capitalize search-btn" type="submit">find
                                            jobs</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="thick module-2 bright-red-background" data-aos="fade-right" data-id="module-solid_line-2"
            id="content-2" />
        <div class="job-category mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="main-color headings pb-4 text-uppercase">Popular Jobs by EXPERTISE areas</h2>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="">
                            <div class="practice-area-job-category"
                                style='background-image: url("{{ asset('img/about-us/mic.png') }}");'>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Newmark Public Relations</h5>
                                        <p class="card-text text-white mt-3">1 Open Position</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="">
                            <div class="practice-area-job-category"
                                style='background-image: url("{{ asset('img/about-us/event.jpg') }}");'>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Newmark Experiential</h5>
                                        <p class="card-text text-white mt-3">3 Open Position</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="">
                            <div class="practice-area-job-category"
                                style='background-image: url("{{ asset('img/about-us/event.jpg') }}");'>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Newmark Creative</h5>
                                        <p class="card-text text-white mt-3">0 Open Position</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="">
                            <div class="practice-area-job-category"
                                style='background-image: url("{{ asset('img/about-us/phone.png') }}");'>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Newmark Digital</h5>
                                        <p class="card-text text-white mt-3">0 Open Position</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="">
                            <div class="practice-area-job-category"
                                style='background-image: url("{{ asset('img/about-us/light.png') }}");'>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Newmark Insights</h5>
                                        <p class="card-text text-white mt-3">1 Open Position</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="">
                            <div class="practice-area-job-category"
                                style='background-image: url("{{ asset('img/about-us/table.jpg') }}");'>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Multilingual Support</h5>
                                        <p class="card-text text-white mt-3">1 Open Position</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="job-lists">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="main-color headings pb-4 text-uppercase">Popular Jobs list</h2>
                    </div>
                    <div class="col-md-12 job-list-card">
                        <a href="">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="row ">
                                                <div class="col-md-2">
                                                    <img src="{{ asset('img/newmark-logo.png') }}" alt="Job title">
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="job-content">
                                                        <h5><span class="badge-info">Full Time</span></h5>
                                                        <h3>Public Relations Account Executive</h3>
                                                        <div class="row g-0 text-dark-light location-time">
                                                            <div class="col-md-3">
                                                                <i class="fa fa-map-marker-alt"></i> Nairobi, Kenya
                                                            </div>
                                                            <div class="col-md-3">
                                                                <i class="fa fa-clock"></i> 10 hours ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary text-capitalize">browse job</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
