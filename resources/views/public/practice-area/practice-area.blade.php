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
                                <img src="{{ asset('img/practice-areas/digital.png') }}" alt="Logo">
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
                    <div class="col-md-6 order-sm-1 order-2">
                        <div class="card-body">
                            <h5 class="card-title text-transfom-none headings">
                                About Newmark Digital
                            </h5>
                            <p class="card-text mt-3">
                                As the world is becoming innately social every day, brands need to connect and engage
                                with potential
                                customers in the digital space. The digital platform is diverse and keeps changing every
                                day, which
                                means there's no one-size-fits-all approach. At Newmark Digital, we leverage our
                                marketing-savvy skills
                                to provide you with a winning strategy.
                            </p>
                            <p class="card-text ">
                                As the world is becoming innately social every day, brands need to connect and engage
                                with potential
                                customers in the digital space. The digital platform is diverse and keeps changing every
                                day, which
                                means there's no one-size-fits-all approach. At Newmark Digital, we leverage our
                                marketing-savvy skills
                                to provide you with a winning strategy.
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
    {{-- <div class="bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center p-5 m-3">
                    <h4 class="text-capitalize">It is time to elevate your brand to iconic status</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur quisquam eos dolore
                        doloremque mollitia. Sit voluptatibus delectus earum minus nobis. Consequuntur quisquam eos dolore
                        doloremque mollitia. Sit voluptatibus delectus earum minus nobis.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="our-services-digital">
        <div class="container mt-4" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5 class="text-transfom-none headings mt-5 mb-4 text-white">
                        Our services
                    </h5>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                                class="card-img-top" alt="">
                            <div class="card-body main-background-color">
                                <h5 class="card-title text-capitalize text-white">Social Media Management</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1560421683-6856ea585c78?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2074&q=80"
                                class="card-img-top" alt="">
                            <div class="card-body main-background-color">
                                <h5 class="card-title text-capitalize text-white">Graphic Design</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                                class="card-img-top" alt="">
                            <div class="card-body main-background-color">
                                <h5 class="card-title text-capitalize text-white">Social Media Management</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1560421683-6856ea585c78?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2074&q=80"
                                class="card-img-top" alt="">
                            <div class="card-body main-background-color">
                                <h5 class="card-title text-capitalize text-white">Graphic Design</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                                class="card-img-top" alt="">
                            <div class="card-body main-background-color">
                                <h5 class="card-title text-capitalize text-white">Social Media Management</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1560421683-6856ea585c78?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2074&q=80"
                                class="card-img-top" alt="">
                            <div class="card-body main-background-color">
                                <h5 class="card-title text-capitalize text-white">Graphic Design</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="practice-area-section pb-3">
        <div class="container module carousel-module module-5 our-expertise-new" data-aos="fade-up"
            data-id="module-carousel-5">
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <h2 class="text-capitalize main mt-5 text-white">Our services</h2>
                </div>
            </div>
            <div class="mt-3">
                <div class="dots dots-33"></div>
                <div class="carousel">
                    <div class="carousel-block">
                        <div class="left background-cover"
                            style="background-image:url(https://images.unsplash.com/photo-1562577309-4932fdd64cd1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80);">
                        </div>
                        <div class="right padding-right">
                            <h3 class="margin-bottom-half">Social Media Management</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In, praesentium nesciunt? Quibusdam
                                aliquid odio dignissimos totam corrupti exercitationem, soluta iusto illum accusantium,
                                nesciunt
                                quae odit velit explicabo nemo, eum sint?
                            </p>
                            <span class="content-link">
                                <a href="#">
                                    Learn More <i class="fa fa-chevron-right"></i>
                                </a>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="carousel-block">
                        <div class="left background-cover"
                            style="background-image:url(https://images.unsplash.com/photo-1560421683-6856ea585c78?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2074&q=80);">
                        </div>
                        <div class="right padding-right">
                            <h3 class="margin-bottom-half">Graphic Design</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, eius beatae. Amet quam
                                nihil
                                omnis ex aspernatur blanditiis velit reprehenderit totam ut vero dolore sequi, sapiente
                                autem
                                quasi suscipit tenetur?
                            </p>
                            <span class="content-link">
                                <a href="#">
                                    Learn More <i class="fa fa-chevron-right"></i>
                                </a>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="carousel-block">
                        <div class="left background-cover"
                            style="background-image:url(https://images.unsplash.com/photo-1560421683-6856ea585c78?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2074&q=80);">
                        </div>
                        <div class="right padding-right">
                            <h3 class="margin-bottom-half">Graphic Design</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, eius beatae. Amet quam
                                nihil
                                omnis ex aspernatur blanditiis velit reprehenderit totam ut vero dolore sequi, sapiente
                                autem
                                quasi suscipit tenetur?
                            </p>
                            <span class="content-link">
                                <a href="#">
                                    Learn More <i class="fa fa-chevron-right"></i>
                                </a>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="carousel-block">
                        <div class="left background-cover"
                            style="background-image:url(https://images.unsplash.com/photo-1560421683-6856ea585c78?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2074&q=80);">
                        </div>
                        <div class="right padding-right">
                            <h3 class="margin-bottom-half">Graphic Design</h3>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, eius beatae. Amet quam
                                nihil
                                omnis ex aspernatur blanditiis velit reprehenderit totam ut vero dolore sequi, sapiente
                                autem
                                quasi suscipit tenetur?
                            </p>
                            <span class="content-link">
                                <a href="#">
                                    Learn More <i class="fa fa-chevron-right"></i>
                                </a>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container mt-4 case-studies pb-1">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h5 class="text-transfom-none headings mt-5 mb-4">
                        Case studies
                    </h5>
                </div>
            </div>
            <div class="case-studies-carousel">
                <div class="case-studies-img-overlay">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        alt="Avatar" class="case-studies-img-overlay-image">
                    <div class="case-studies-overlay">
                        <div class="case-studies-text">Lorem, ipsum dolor</div>
                    </div>
                </div>
                <div class="case-studies-img-overlay">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                        alt="Avatar" class="case-studies-img-overlay-image">
                    <div class="case-studies-overlay">
                        <div class="case-studies-text">Lorem, ipsum dolor</div>
                    </div>
                </div>
                <div class="case-studies-img-overlay">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                        alt="Avatar" class="case-studies-img-overlay-image">
                    <div class="case-studies-overlay">
                        <div class="case-studies-text">Lorem, ipsum dolor</div>
                    </div>
                </div>
                <div class="case-studies-img-overlay">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                        alt="Avatar" class="case-studies-img-overlay-image">
                    <div class="case-studies-overlay">
                        <div class="case-studies-text">Lorem, ipsum dolor</div>
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
