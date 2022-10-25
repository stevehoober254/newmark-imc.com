@extends('layouts.public')
@section('content')
    <div class="module home-hero-module white module-1" data-aos="fade-up" data-id="module-home_hero-1" id="content-1">
        <div class="background-video">
            <video id="video" preload="none" loop muted poster="{{ asset('img/newmark.png') }}">
                <source src="{{ asset('videos/newmark-new.mp4') }}" type="video/mp4" />
            </video>
        </div>

        <div class="constrained">
            <div class="content padding-x2">
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="number-events">
                        <div class="col-md-12 text-center">
                            <h4 class="topic">Industry leader</h4>
                        </div>
                        <div class="row number-events-contents">
                            <div class="col-md-4">
                                <div class="d-flex justify-content-start">
                                    <div>
                                        <img src="{{ asset('icons/location.svg') }}" alt="">
                                    </div>
                                    <div>
                                        <h6>30+</h6>
                                        <span>Countries</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex justify-content-start">
                                    <div>
                                        <img src="{{ asset('icons/people.svg') }}" alt="">
                                    </div>
                                    <div>
                                        <h6>70+</h6>
                                        <span>Experts</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="d-flex justify-content-start">
                                    <div>
                                        <img src="{{ asset('icons/calendar.svg') }}" alt="">
                                    </div>
                                    <div>
                                        <h6>500 </h6>
                                        <span>projects & events</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container after-industry" data-aos="fade-up">
        <div class="our-business mt-5 mb-3">
            <div class="bg-white end-strip">
                <a href="#">
                    <div class="row g-0">
                        <div class="col-md-6 order-sm-1 order-2">
                            <div class="card-body">
                                <h5 class="card-title text-transfom-none headings">
                                    Why we exist
                                </h5>
                                <p class="card-text mt-3 large-text">
                                    The Newmark Group is helping to build a world which provides inclusive prosperity for
                                    all. To do this, we have built a team that consistently delivers mission-critical
                                    insights, strategies, storytelling and execution, through our Strategic Communication
                                    and Consulting solutions
                                </p>
                                <span class="btn btn-secondary-outline text-capitalize mt-4">Read
                                    More
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 order-1 order-sm-2">
                            <img src="img/black-white.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                    <div class="bottom-stripe"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="be-seen pt-5 pb-5">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-4">
                    <div class="card background-blue text-center">
                        <div class="card-body">
                            <div class="icon">
                                <span class="feature-eye">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                            <h1 class="feature-box-title">BE SEEN || BE HEARD</h1>
                            <p class="card-text">
                                Do you want your products, services, activities and achievements to
                                be seen and to produce growth?
                            </p>
                            <a href="#" class="text-uppercase read-more">
                                Read More <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card background-blue text-center">
                        <div class="card-body">
                            <div class="icon">
                                <span class="feature-eye">
                                    <i class="fa fa-headphones"></i>
                                </span>
                            </div>
                            <h1 class="feature-box-title">BE EXPERIENCED || BE REMEMBERED</h1>
                            <p class="card-text">
                                Want a successful congress or event that propels your brand to
                                higher heights of visibility and influence in your sector?
                            </p>
                            <a href="{{ route('about.us') }}" class="text-uppercase read-more">
                                Read More <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card background-blue text-center">
                        <div class="card-body">
                            <div class="icon">
                                <span class="feature-eye">
                                    <i class="fa fa-book-open"></i>
                                </span>
                            </div>
                            <h1 class="feature-box-title">BE BELIEVED || BE PROFITABLE</h1>
                            <p class="card-text">
                                Do you want to attract more revenue, mobilize more resources through
                                multiplatform marketing communications?
                            </p>
                            <a href="#" class="text-uppercase read-more">
                                Read More <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newmark-practice-areas pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="headings main-color pb-2">what we do</h2>
                </div>
            </div>
            <div class="row g-0 we-connect-bg mb-2">
                <div class="col-md-4 text-center we-connect">
                    <h1>We Connect</h1>
                </div>
                <div class="col-md-8">
                    <div class="row g-0">
                        <div class="col-md-6 bg-white single-department">
                            <a href="">
                                <h2>Public Relations</h2>
                            </a>
                        </div>
                        <div class="col-md-6 bg-1 single-department">
                            <a href="">
                                <h2>Creative Content</h2>
                            </a>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6 bg-2 single-department">
                            <a href="">
                                <h2>Digital Marketing</h2>
                            </a>
                        </div>
                        <div class="col-md-6 single-department">
                            <div class="newmark-practice-area-img-wrapper">
                                <img src="{{ asset('img/homepage/3.png') }}" alt="We Connect">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 bg-3 mb-2">
                <div class="col-md-8 order-sm-first order-last">
                    <div class="row g-0">
                        <div class="col-md-6 bg-white single-department">
                            <a href="">
                                <h2>Coaching and Training</h2>
                            </a>
                        </div>
                        <div class="col-md-6 bg-5 single-department">
                            <a href="">
                                <h2>Analytics & Insights</h2>
                            </a>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6 bg-5 single-department">
                            <a href="">
                                <h2>Technology Deployment</h2>
                            </a>
                        </div>
                        <div class="col-md-6 single-department">
                            <div class="newmark-practice-area-img-wrapper">
                                <img src="{{ asset('img/homepage/2.jpg') }}" alt="We Connect">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center we-connect bg-3 order-lg-2 order-sm-1">
                    <h1>We Empower</h1>
                </div>
            </div>
            <div class="row g-0 bg-4 mb-2">
                <div class="col-md-4 text-center we-connect ">
                    <h1>We Activate</h1>
                </div>
                <div class="col-md-8">
                    <div class="row g-0">
                        <div class="col-md-6 bg-white single-department">
                            <a href="">
                                <h2>Event Management</h2>
                            </a>
                        </div>
                        <div class="col-md-6 bg-6 single-department">
                            <a href="">
                                <h2>Experiential Marketing</h2>
                            </a>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-6 bg-6 single-department">
                            <a href="">
                                <h2>Multimedia Productions</h2>
                            </a>
                        </div>
                        <div class="col-md-6 single-department">
                            <div class="newmark-practice-area-img-wrapper">
                                <img src="{{ asset('img/homepage/1.jpg') }}" alt="We Connect">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="company-we-keep">
        <div class="container" data-aos="fade-up">
            <div class="row g-0">
                <div class="col-md-12 text-center mb-4 mt-3">
                    <h2 class=" text-capitalize main text-white"><span>We localize the global and globalize the
                            local!</span></h2>
                </div>
            </div>
            <div class="row company-logos ">
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/1.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.gatesfoundation.org/" target="_blank">
                        <img src="{{ asset('img/client-logos/bill-melinda.svg') }}" class="img-fluid" alt=""></a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/3.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/4.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/5.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/6.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/7.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.pfizer.com/" target="_blank">
                        <img src="{{ asset('img/client-logos/pfizer.svg') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="row company-logos company-logos-second mt-2">
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/8.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/9.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/10.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/11.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/12.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/13.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.livesandlivelihoodsfund.org/en" target="_blank">
                        <img src="{{ asset('img/client-logos/lives-and-livelihoods-fund.png') }}" class="img-fluid"
                            alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/30.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="row company-logos company-logos-second mt-2">
                <div class="col">
                    <a href="https://www.novartis.com/" target="_blank">
                        <img src="{{ asset('img/client-logos/novartis.svg') }}" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/16.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/17.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/18.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/19.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/20.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="img/client-logos/21.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="https://garid-accra.com/" target="_blank">
                        <img src="{{ asset('img/client-logos/logo-GARID-01.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="row text-center mt-4">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <a href="#" class="btn btn-secondary text-capitalize mt-4">More clients
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-1 testimonials" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-1 mt-4">
                <h2 class="text-capitalize"><span>WHAT OUR CLIENTS SAY</span></h2>
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
                </div>
            </div>
            <div class="testimony-card">
                <i class="fa fa-quote-left"></i>
                <div class="testimony-desc">
                    <p>
                        Thank you for the good job and professionalism exhibited by your team especially Raissa who was with
                        us in Zanzibar and was very helpful and coordinated the tasks meticulously. We truly appreciate the
                        extra effort to make sure the inaugural flight was indeed a success. Thanks for the great and
                        impressive results.
                    </p>
                </div>
                <div class="testimony-author">
                    <img src="{{ asset('img/client-logos/turkey-logo.png') }}" alt="Turkish Airlines">
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
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-1 practice-areas mb-5" data-aos="fade-up">
        <div class="row g-0">
            <div class="col-md-12 text-center mb-1">
                <h2 class=" text-capitalize main"><span>Sectors that we serve</span></h2>
            </div>
        </div>
        <div class="practice-area-containers">
            <div class="row">
                <div class="col-lg-3 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="img/sectors/consumer.jpg" />
                            <figcaption>
                                <h2>consumer goods </h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="img/sectors/energy.jpg" />
                            <figcaption>
                                <h2>energy</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="img/sectors/currency.jpg" />
                            <figcaption>
                                <h2>financial services</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="img/sectors/public-sector.jpg" />
                            <figcaption>
                                <h2>public sector</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="img/sectors/travel.jpg" />
                            <figcaption>
                                <h2>
                                    travel & hospitality
                                </h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="img/sectors/nonprofit.jpg" />
                            <figcaption>
                                <h2>
                                    development & non profit
                                </h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="img/sectors/technology.jpg" />
                            <figcaption>
                                <h2>
                                    technology & big industry
                                </h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="img/sectors/health.jpg" />
                            <figcaption>
                                <h2>
                                    healthcare
                                </h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- what makes us different --}}
    <div class="practice-area-section what-makes-us-different pt-5 pb-5">
        <div class="container" data-aos="fade-up">
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <h2 class="text-capitalize main text-white">WHAT MAKES US DIFFERENT</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card background-blue text-center">
                        <div class="card-body">
                            <div class="icon">
                                <span class="feature-eye">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <p class="card-text">
                                We bring a lens of <strong>MULTILINGUAL</strong> and <strong>MULTICULTURAL</strong>
                                communications to everything that we do
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card background-blue text-center">
                        <div class="card-body">
                            <div class="icon">
                                <span class="feature-eye">
                                    <i class="fa fa-globe"></i>
                                </span>
                            </div>
                            <p class="card-text">
                                We have the bandwidth to serve pan African brands that aspire to <strong>GLOBALIZE</strong>,
                                as well as global brands that seek to <strong>LOCALIZE</strong> their stories
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card background-blue text-center">
                        <div class="card-body">
                            <div class="icon">
                                <span class="feature-eye">
                                    <i class="fa fa-hands-helping"></i>
                                </span>
                            </div>
                            <p class="card-text">
                                Our purpose and drive to help our clients SOLVE <strong>BUSINESS-CRITICAL PROBLEMS</strong>
                                drives us to enlist diverse capabilities through resource acquisition,
                                upskilling
                                and good old fashioned invention.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card background-blue text-center">
                        <div class="card-body">
                            <div class="icon">
                                <span class="feature-eye">
                                    <i class="fa fa-handshake"></i>
                                </span>
                            </div>
                            <p class="card-text">
                                Our <strong>RESEARCH</strong>
                                capability, coupled with <strong>GLOBAL INTELLIGENCE</strong>,
                                drives everything we do for/with our clients and partners
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Insights -->
    <div id="insights" class="container news-section mt-5" data-aos="fade-up">
        <div class="row g-0">
            <div class="col-md-12 mb-4 text-center">
                <h3 class="text-capitalize main"><span>Insights</span></h3>
            </div>
        </div>
        <div class="row ">
            @foreach ($insights as $insight)
                <div class="col-lg-4 ">
                    <a href="{{ route('insight.details', $insight->slug) }}">
                        <main>
                            <div class='normal '>
                                <div class='module'>
                                    <div class='thumbnail'>
                                        @if ($insight->image)
                                            <img src="{{ $insight->image->getUrl() }}" alt="{{ $insight->title }}">
                                        @endif
                                        <div class='date'>
                                            <div>
                                                {{ $insight->created_at->format('d') }}
                                            </div>
                                            <div>
                                                {{ $insight->created_at->format('M') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class='content'>
                                        <h1 class='title'>
                                            {{ $insight->title }}
                                        </h1>
                                        <div class="description">
                                            {!! Str::limit($insight->description, 200, '...') !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row text-center">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <a href="{{ route('insights') }}" class="btn btn-secondary-outline text-capitalize mt-4">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="mt-5 connect-with-us container">
        <div class="row g-0">
            <div class="col-md-12 mb-4 text-center">
                <h3 class="text-capitalize main"><span>Gallery</span></h3>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-12">
                <div class="text-center gallery-carousel-items">
                    <div class="item gallery-carousel card">
                        <div class="team gallery-style">
                            <div class="gallery-img">
                                <img class="img-fluid" src="img/gallery/5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item gallery-carousel card">
                        <div class="team gallery-style">
                            <div class="gallery-img">
                                <img class="img-fluid" src="img/gallery/12.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item gallery-carousel card">
                        <div class="team gallery-style">
                            <div class="gallery-img">
                                <img class="img-fluid" src="img/gallery/11.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item gallery-carousel card">
                        <div class="team gallery-style">
                            <div class="gallery-img">
                                <img class="img-fluid" src="img/gallery/15.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item gallery-carousel card">
                        <div class="team gallery-style">
                            <div class="gallery-img">
                                <img class="img-fluid" src="img/gallery/16.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item gallery-carousel card">
                        <div class="team gallery-style">
                            <div class="gallery-img">
                                <img class="img-fluid" src="img/gallery/18.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container module image-text-split-module case-study-module has-link module-11 white-background"
        data-aos="fade-up" data-id="module-image_text_split-11" id="content-11">
        <a href="{{ route('contact.us') }}" class="no-hover">
            <div class=" button-hover">
                <div class="left case-study-image" style=" background-color:#ffffff;">
                    <div class="case-study-image-image background-contain"
                        style="background-image:url(img/Square-WomenonIPad.png);">
                    </div>
                </div>
                <div class="constrained">
                    <div class="right case-study-text padding-y-x2 padding-x">
                        <h2 class="connect-with-us-heading">
                            Connect with us</h2>
                        <p class="background-color-text margin-bottom text-muted">
                            We are proud of our rich legacy of work since 2010, as we connect, empower and activate brands
                            to become a force for good, not only in Africa, but globally.
                        </p>
                        <span class="button transparent background-color-text">Read More <i
                                class="fa fa-chevron-right"></i></span>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </a>
        <div class="clear"></div>
    </div>
@endsection
