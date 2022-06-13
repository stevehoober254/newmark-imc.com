@extends('layouts.public')
@section('content')
    <div class="practice-area-top-header"
        style="background-image: url('https://images.unsplash.com/photo-1475669698648-2f144fcaaeb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');">
        <div class="bg-top-header">
            <div class="bg-fade">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-md-4">
                            <div class="logo">
                                <a href="">
                                    <img src="{{ asset('img/practice-areas/creative.png') }}" alt="Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 bg-white" data-aos="fade-up">
        <div class="row pt-2">
            <div class="col-md-6 margin-top">
                <p class="mt-4">
                    Creativity forms the backbone of everything we do at Newmark Creative – inventing creative solutions to
                    even the most random of tasks is what makes us special.
                </p>
                <p>
                    We are home to a strong pool of exceptional creatives with bucket loads of experience in agency and
                    in-house multimedia content, all of whom bring something different to the mix.
                </p>
                <p>
                    We mix strategy, creativity, and development to make your brand into the hearts and minds of your
                    stakeholders.
                </p>
            </div>
            <div class="col-md-6">
                <div class="practice-area-img-wrapper">
                    <img src="{{ asset('img/practice-areas/creative/2.png') }}" alt="Wrapper">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 bg-white" data-aos="fade-up">
        <div class="row mt-5">
            <div class="col-md-5">
                <img src="{{ asset('img/practice-areas/creative/1.png') }}" alt="" class="img-left">
            </div>
            <div class="col-md-7 mt-5 padding-top">
                <p class="pt-5">
                    We work closely with each of our clients to create communications that convey a clear, compelling
                    message that helps to build their brand and support the growth of their business.
                </p>
                <p>
                    We shape your brand to be a BIG THING for tomorrow. To do this, we blend the finest design approach with
                    creative strategies, which signify a perfect brand identity for a promising experience.
                </p>
            </div>
        </div>
    </div>
    <div class="container mt-4 bg-white padding-bottom" data-aos="fade-up">
        <div class="row mt-5 pt-4">
            <div class="col-md-12">
                <h2 class="main-color text-capitalize text-bold">What we do</h2>
                <p>
                    Our Creative Scope at Newmark is divided into two segments;
                </p>
                <ul class="list-styled">
                    <li>
                        <i class="fa fa-check"></i> Creative Design Services
                    </li>
                    <li>
                        <i class="fa fa-check"></i> Multimedia Services
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <h2 class="main-color text-capitalize text-bold">Creative Design Services</h2>
            </div>
        </div>
        <div class="creative-carousel-design">
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Publications</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Brand Identity</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Stationery</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Publications</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Publications</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-color text-capitalize text-bold">Multimedia Services</h2>
            </div>
        </div>
        <div class="creative-carousel-design">
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Event Coverage</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Photography</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Live Streaming</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Event Coverage</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Photography</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    style="background-image:url('https://images.unsplash.com/photo-1594182878996-036fe2646c11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=933&q=80');">
                    <div class="creative-carousel">
                        <h4>Live Streaming</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
