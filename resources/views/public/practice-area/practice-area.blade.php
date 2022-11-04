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
                                <img src="https://lh3.googleusercontent.com/keep-bbsk/AP6BvTTclEa31X7wREnzCXT0V6eCUF7uk8ljT4Cdk2hkuKszO7OdVFZIuZXcPZS659w2-K96gFL9XLGxqLjtAH15EPV-vxya3saeaD0GiTIahQBWXIpU=s512"
                                    alt="Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 bg-white" data-aos="fade-up">
        <div class="our-business mb-3">
            <div class="">
                <div class="row g-0">
                    <div class="col-md-6 order-sm-1 order-2 center-item-vertically">
                        <div class="card-body">
                            <h5 class="card-title text-transfom-none headings">
                                About Newmark Digital
                            </h5>
                            <p class="card-text mt-3">
                                Newmark Digital helps to connect worlds, empower brands and activate conversations. We do
                                this through innovative ideas, technology and talent, in the service of a happier and more
                                prosperous world for all. Join us on this journey!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-sm-2">
                        <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 bg-white" data-aos="fade-up">
        <div class="practice-area-services">
            <div class="row">
                <div class="col-lg-12 text-center mb-1 mt-4">
                    <h2 class="text-capitalize"><span>our services</span></h2>
                </div>
            </div>
            <div class="row practice-area-service-details text-white">
                <div class="col-md-5 center-item-vertically bg-main">
                    <div class="service-heading">
                        <h3>SOCIAL MEDIA & INFLUENCER MANAGEMENT</h3>
                        <h5>Connect with your tribe</h5>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-img-wrapper">
                                <img src="{{ asset('img/newmark-digital/4.jpg') }}"
                                    alt="SOCIAL MEDIA & INFLUENCER MANAGEMENT">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-img-wrapper">
                                <img src="{{ asset('img/newmark-digital/3.jpg') }}"
                                    alt="SOCIAL MEDIA & INFLUENCER MANAGEMENT">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-img-wrapper">
                                <img src="{{ asset('img/newmark-digital/1.jpg') }}"
                                    alt="SOCIAL MEDIA & INFLUENCER MANAGEMENT">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-img-wrapper">
                                <img src="{{ asset('img/newmark-digital/2.jpg') }}"
                                    alt="SOCIAL MEDIA & INFLUENCER MANAGEMENT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- testimonies --}}
    <div class="container mt-1 testimonials" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-1 mt-4">
                {{-- <p>WHAT OUR CLIENTS SAY ABOUT US</p> --}}
                <h2 class="text-capitalize"><span>Testimonials</span></h2>
            </div>
        </div>
        <div class="row text-center testimonials-carousel text-center">
            <div class="testimony-card">
                <i class="fa fa-quote-left"></i>
                <div class="testimony-desc">
                    <p>
                        Specifically as the client what I appreciated very much was the teams’ expertise to understand our
                        needs andto proactively chase the Novartis team, ask challenging questions and provide
                        constructive solutions. The credibility Komla and team have built up with H.E Vice President of the
                        Republic of Ghana and other government offices helped our launch be seamless. Our Global CEO said
                        recently to an internal audience “this event was one of his major highlights for 2019 and a proud
                        moment in his career”. You should be very proud of the team you have built. We for sure will
                        continue to partner as we scale our program across sub-Saharan Africa.
                    </p>
                </div>
                <div class="testimony-author">
                    <img src="{{ asset('img/client-logos/novar.png') }}" alt="Paxful">
                    {{-- <h6>Client Name</h6> --}}
                </div>
            </div>
            <div class="testimony-card">
                <i class="fa fa-quote-left"></i>
                <div class="testimony-desc">
                    <p>
                        Thank you for the good job and professionalism exhibited by your team especially Raissa who was with
                        us in Zanzibar and was very helpful and coordinated the tasks meticulously. We truly appreciate the
                        extra effort to make sure the inaugural flight was indeed a success.
                    </p>
                </div>
                <div class="testimony-author">
                    <img src="{{ asset('img/client-logos/turkey-logo.png') }}" alt="Turkish Airlines">
                    {{-- <h6>Turkish Airlines</h6> --}}
                </div>
            </div>
            <div class="testimony-card">
                <i class="fa fa-quote-left"></i>
                <div class="testimony-desc">
                    <p>
                        Thanks for the great and impressive results.
                    </p>
                </div>
                <div class="testimony-author">
                    <img src="{{ asset('img/client-logos/motorola.png') }}" alt="Motorolla">
                    {{-- <h6>Motorolla</h6> --}}
                </div>
            </div>
            <div class="testimony-card">
                <i class="fa fa-quote-left"></i>
                <div class="testimony-desc">
                    <p>
                        We launched a couple of main products, announced new partnerships, set all-time high records and
                        established new markets. You were on that journey all throughout and we cannot thank you enough for
                        the hard work and dedication to help us grow as a brand. Thanks for your invaluable input and for
                        always pushing us to be the best in the industry.
                    </p>
                </div>
                <div class="testimony-author">
                    <img src="{{ asset('img/client-logos/paxful.png') }}" alt="Paxful">
                    {{-- <h6>Paxful</h6> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
