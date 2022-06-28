@extends('layouts.public')
@section('content')
    <div class="careers-top-header">
        <div class="careers-bg">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-md-6">
                        <h2>
                            Join our team
                        </h2>
                        <p>
                            Join our team of professionals and gain experience you could only dream about. Nisi tenetur
                            corrupti voluptates?
                            Expedita quae eos velit
                        </p>
                        <a href="" class="btn btn-primary">View Openings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="thick module-2 bright-red-background" data-aos="fade-right" data-id="module-solid_line-2" id="content-2" />
    <div class="opening-statement" data-aos="fade-up">
        <div class="container">
            <div class="our-business mt-5 mb-3">
                <div class="background-white end-strip">
                    <div class="row g-0">
                        <div class="col-md-6 order-sm-1 order-2">
                            <div class="card-body">
                                <h5 class="card-title text-transfom-none headings">
                                    Our Culture
                                </h5>
                                <p class="card-text">
                                    Our <span class="text-main-color text-capitalize ">Culture</span> has been
                                    instrumental to our success and has helped us attract and retain
                                    stunning
                                    colleagues.
                                </p>
                                <p class="card-text">
                                    No matter what your background is, or where you want to work at Newmark, you’ll be able
                                    to
                                    make a sustainable difference for clients, communities and the colleagues you work with.
                                    We
                                    value the fresh perspectives highly talented people bring to Newmark. If you enjoy our
                                    culture and want to drive lasting, positive change, find out where you fit in, either as
                                    an
                                    <span class="text-main-color text-capitalize ">Experienced professional</span>
                                    or through an <span class="text-main-color text-capitalize ">Internship</span>.
                                </p>
                                <p class="card-text">
                                    We offer these services through our Practice areas, please view each Practice area for
                                    more
                                    details as you reflect on the team you would like to join on your career journey,
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 order-1 order-sm-2">
                            <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
                                class="img-fluid rounded-start" alt="Careers page">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-6">
                    <a href="">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <span class="text-main-color text-capitalize">
                                        Experienced Professionals <i class="fa fa-arrow-right"></i>
                                    </span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <span class="text-main-color text-capitalize">
                                        Internships <i class="fa fa-arrow-right"></i>
                                    </span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 bg-white our-services-digital practice-area-jobs" data-aos="fade-up">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5 class="text-transfom-none headings mt-5 mb-4">
                    Opportunities by Practice Area
                </h5>
            </div>
        </div>
        <div class="careers-practice-area-carousel text-center">
            <div>
                <a href="">
                    <div class="card">
                        <img src="{{ asset('img/10.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">Newmark Public Relations <i
                                    class="fa fa-arrow-right"></i></h5>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="card">
                        <img src="{{ asset('img/12.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">Newmark Creative <i class="fa fa-arrow-right"></i></h5>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="card">
                        <img src="{{ asset('img/robot.jpeg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">Newmark Digital <i class="fa fa-arrow-right"></i></h5>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="card">
                        <img src="{{ asset('img/9.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">Newmark Experiential <i class="fa fa-arrow-right"></i>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="card">
                        <img src="{{ asset('img/11.jpeg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">Newmark Insights <i class="fa fa-arrow-right"></i></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
