@extends('layouts.public')
@section('title')
    Careers
@endsection
@section('content')
    <div class="newmark-careers">
        <div class="careers-top-header"
            style='background-image: url("https://images.unsplash.com/photo-1573164574397-dd250bc8a598?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80");'>
            <div class="careers-bg">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-md-6">
                            <h1>
                                Newmark Careers
                            </h1>
                            <p>
                                Think Exceptional | Be Exceptional
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="thick module-2 bright-red-background" data-aos="fade-right" data-id="module-solid_line-2" id="content-2" />
        <div class="careers-bg-wrapper">
            <div class="container">
                <div class="module image-text-split-module case-study-module has-link  module-6 mt-4" data-aos="fade-up"
                    style="background-color: var(--secondary-color)">
                    <a class="no-hover">
                        <div class=" button-hover">
                            <div class="right case-study-image">
                                <div class="case-study-image-image background-cover"
                                    style="background-image:url({{ asset('img/careers/people.jpeg') }});">
                                </div>
                            </div>
                            <div class="left case-study-text padding-x padding-y mt-3">
                                <h2 class="text-white">WHY WE EXIST</h2>
                                <p class="text-white">
                                    We are helping to build a world which provides inclusive prosperity for all. For us,
                                    this means a world where individuals and communities are empowered to maximize
                                    their
                                    potential and chase their dreams.
                                </p>
                                <p class="text-white">
                                    To do this, we have built a team that consistently delivers mission-critical insights,
                                    strategies,
                                    storytelling and execution, through our Strategic Communication and Consulting
                                    Solutions.
                                </p>
                                <p class="text-white">We are proud of our rich legacy of work since 2010, as we connect,
                                    empower
                                    and
                                    activate brands to become a force for good, not only in Africa, but globally.
                                </p>
                                <p class="text-white">
                                    <a target="_blank" href="{{ asset('files/NewmarkCultureDeck.pdf') }}">Would
                                        you like to understand us better, check out our culture deck here.</a>
                                </p>
                                <a href="{{ route('job.list') }}"
                                    class="btn btn-secondary-outline text-white border-white">View available
                                    Opportunities <i class="fa fa-arrow-right"></i></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="what-makes-us-different pt-3 pb-2">
                <div class="container" data-aos="fade-up">
                    <div class="row mt-4">
                        <div class="col-md-12 text-center">
                            <h2 class="text-capitalize main">3 pillars of our culture</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card background-blue text-center">
                                <div class="card-body">
                                    <div class="icon">
                                        <span class="feature-eye">
                                            <i class="fa fa-people-carry"></i>
                                        </span>
                                    </div>
                                    <h1 class="feature-box-title">Alliance</h1>
                                    <p class="card-text">
                                        We believe in mutual investment for mutual benefit, and are big on ensuring that our
                                        workplace is a place where the best professionals are placed on a path towards the
                                        fulfillment of their career goals.
                                    </p>
                                    <p class="card-text">
                                        Team members, management and shareholders all have core aspirations and values, and
                                        our
                                        relationship is a mutual alliance that needs to help all of us.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card text-center border-none" style="background-color: var(--secondary-color)">
                                <div class="card-body">
                                    <div class="icon">
                                        <span class="feature-eye">
                                            <i class="fa fa-chalkboard"></i>
                                        </span>
                                    </div>
                                    <h1 class="feature-box-title">Freedom</h1>
                                    <p class="card-text">
                                        Our purpose is to help create an empowered world which provides inclusive prosperity
                                        for
                                        all.
                                    </p>
                                    <p class="card-text">
                                        This requires our team to embrace responsibility over our impact, and we all know
                                        that
                                        Responsible People <strong>Thrive</strong> on Freedom, and are
                                        <strong>Worthy</strong>
                                        of
                                        Freedom. This entails freedom to
                                        create, to learn, to lead, to evolve and to influence.
                                    </p>
                                    <p class="card-text">
                                        Those who love such freedom feel right at home at Newmark.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card text-center" style="background-color: var(--main-color-darker)">
                                <div class="card-body">
                                    <div class="icon">
                                        <span class="feature-eye">
                                            <i class="fa fa-hands-helping"></i>
                                        </span>
                                    </div>
                                    <h1 class="feature-box-title">Leadership</h1>
                                    <p class="card-text">
                                        We believe that leadership is about service to something bigger than self. Although
                                        team
                                        leaders have an added responsibility of setting the vision, we believe in everyone’s
                                        inherent ability to bring value and knowledge into the team.
                                    </p>
                                    <p class="card-text">
                                        We are big on trust, alongside other attributes such as loyalty, integrity, ability,
                                        keeping
                                        promises and mutual exchange of value.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="module image-text-split-module case-study-module has-link  module-7" data-aos="fade-up"
                    style="background-color: var(--secondary-color)">
                    <a class="no-hover">
                        <div class=" button-hover">
                            <div class="left case-study-image">
                                <div class="case-study-image-image background-cover"
                                    style="background-image:url(https://images.pexels.com/photos/8553867/pexels-photo-8553867.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);">
                                </div>
                            </div>
                            <div class="constrained">
                                <div class="right case-study-text">
                                    <div class="case-study-text__inner padding-top-bottom">
                                        <p class="text-white">
                                            We believe that what makes a
                                            workplace
                                            great is
                                            Great Colleagues! This is
                                            why we strive to hire well and we help each other to be great. We also keep
                                            improving
                                            our
                                            culture as we grow, and we strive to enhance our ability to have a better,
                                            bigger
                                            positive
                                            impact in the world through our craft.
                                        </p>
                                        <p class="text-white">
                                            Have interest in joining our team? Fill in the form below that allows you
                                            to express interest in joining Newmark Group Limited. Please complete the form
                                            honestly, answering all sections fully. By filling this form, you signify that
                                            you consent to the use of this data according to our data Protection and Privacy
                                            Policy.
                                        </p>
                                        <a href="#" class="btn btn-secondary text-white border-white">Fill
                                            Personal History Form <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </a>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
