@extends('layouts.public')
@section('content')
    <div class="module home-hero-module white module-1" data-aos="fade-up" data-id="module-home_hero-1" id="content-1">
        <div class="background-video">
            <video id="video" preload="none" loop muted poster="{{ asset('img/homepage.png') }}">
                <source src="{{ asset('videos/newmark.mp4') }}" type="video/mp4" />
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
                <a href="">
                    <div class="row g-0">
                        <div class="col-md-6 order-sm-1 order-2">
                            <div class="card-body">
                                <h5 class="card-title text-transfom-none headings">
                                    Turning the unseen into reality!
                                </h5>
                                <p class="card-text mt-3">
                                    We believe in the power of brands to help build a better, more resilient and prosperous
                                    world. To achieve this, brands need storytellers with in-built empathy, innovation and
                                    courage to take on the big challenges. This is who we are!
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
    {{-- <div class="container" data-aos="fade-up">
        <div class="our-business mt-5">
            <div class="bg-white end-strip">
                <a href="">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="img/7.jpg" class="img-fluid rounded-start mr-3" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title text-transfom-none headings">What We Believe
                                </h5>
                                <p class="card-text mt-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
                                    fugiat culpa enim tempora tenetur laudantium fugit reiciendis,
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
                                    fugiat culpa enim tempora tenetur laudantium fugit reiciendis,
                                </p>
                                <span class="btn btn-secondary-outline text-capitalize mt-4">Read
                                    More
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-stripe"></div>
                </a>
            </div>
        </div>
    </div> --}}

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
    <div class="container module carousel-module module-5 our-expertise-new" data-aos="fade-up" data-id="module-carousel-5">
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h2 class="text-capitalize main">Our Practice Areas</h2>
            </div>
        </div>
        <div class="mt-3">
            <div class="dots dots-33"></div>
            <div class="carousel">
                <div class="carousel-block">
                    <div class="left background-cover" style="background-image:url({{ asset('img/9.jpg') }});">
                    </div>
                    <div class="right padding-right">
                        <h4 class="secondary-color">Connect</h4>
                        <h3 class="margin-bottom-half">NewmarkX <small> - A New Way to Convene!</small></h3>
                        <p>
                            The ability to deliver high-quality events is directly dependent on the technical skills, tools
                            and equipment available to the team. Since its inception, Newmark Experiential has implemented
                            projects in Westall the regions of Africa, including Kenya, Nigeria, South Africa, Ghana and
                            Morocco just to name a few.
                        </p>
                        <span class="content-link">
                            <a href="{{ route('practice.area') }}">
                                Learn More <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="carousel-block">
                    <div class="left background-cover" style="background-image:url({{ asset('img/10.jpg') }});">
                    </div>
                    <div class="right padding-right">
                        <h4 class="secondary-color">ENGAGE</h4>
                        <h3 class="margin-bottom-half">Newmark Public Relations <small> - Lorem ipsum</small></h3>
                        <p>
                            If you want to have meaningful and beneficial experiences with your audiences, stakeholders and
                            partners, then our team is just what the doctor ordered for you. We bring the best of global
                            expertise and deep local understanding to strategic and integrated communications. Ours is a
                            multicultural and authentically localized approach to messaging, strategy and engagement. If
                            those stakeholders happen to be public authorities, then you can not do better than our Public
                            Affairs expertise.
                        </p>
                        <span class="content-link">
                            <a href="{{ route('practice.area') }}">
                                Learn More <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="carousel-block">
                    <div class="left background-cover" style="background-image:url({{ asset('img/11.jpeg') }});">
                    </div>
                    <div class="right padding-right">
                        <h4 class="secondary-color">UNDERSTAND</h4>
                        <h3 class="margin-bottom-half">Newmark Insights</h3>
                        <p>
                            Newmark Insights stands out for our ability to smooth your way and simplify the process of
                            diagnosis, planning and implementation, tailored to the local market.
                        </p>
                        <span class="content-link">
                            <a href="{{ route('practice.area') }}">
                                Learn More <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="carousel-block">
                    <div class="left background-cover" style="background-image:url({{ asset('img/12.png') }});">
                    </div>
                    <div class="right padding-right">
                        <h4 class="secondary-color">ELEVATE</h4>
                        <h3 class="margin-bottom-half">Newmark Creative</h3>
                        <p>
                            This multimedia arm within the Newmark Group Limited specializes in reaching global and local
                            organizations and engaging their stakeholder organizations by developing market-leading
                            storytelling and content design strategies.
                        </p>
                        <span class="content-link">
                            <a href="{{ route('newmark.creative') }}">
                                Learn More <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="carousel-block">
                    <div class="left background-cover" style="background-image:url({{ asset('img/11.jpg') }});">
                    </div>
                    <div class="right padding-right">
                        <h4 class="secondary-color">EMPOWER</h4>
                        <h3 class="margin-bottom-half">Newmark IMC</h3>
                        <p>
                            You know your targets and goals, you have a plan, but is your team optimized and trained to
                            become the brand ambassadors and spokespersons you need them to be? If not, get in touch with us
                            so that our IMC team can ensure that they are empowered to deliver on the goals that you have
                            set.
                        </p>
                        <span class="content-link">
                            <a href="{{ route('practice.area') }}">
                                Learn More <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="carousel-block">
                    <div class="left background-cover"
                        style="background-image:url(https://images.unsplash.com/reserve/NV0eHnNkQDHA21GC3BAJ_Paris%20Louvr.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);">
                    </div>
                    <div class="right padding-right">
                        <h4 class="secondary-color">ENGAGE</h4>
                        <h3 class="margin-bottom-half">Newmark Public Affairs</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quidem
                            nisi doloribus culpa quisquam adipisci, alias a ratione maiores earum.
                        </p>
                        <span class="content-link">
                            <a href="{{ route('practice.area') }}">
                                Learn More <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="carousel-block">
                    <div class="left background-cover"
                        style="background-image:url(https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);">
                    </div>
                    <div class="right padding-right">
                        <h4 class="secondary-color">AMPLIFY</h4>
                        <h3 class="margin-bottom-half">Newmark Digital</h3>
                        <p>
                            At Newmark Digital, we thrive on creating valuable and impactful digital experiences and
                            campaigns with creative messaging that enables your brand to engage in meaningful conversations
                            with your target audience.
                        </p>
                        <span class="content-link">
                            <a href="{{ route('newmark.digital') }}">
                                Learn More <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="carousel-block">
                    <div class="left background-cover" style="background-image:url({{ asset('img/12.jpg') }});">
                    </div>
                    <div class="right padding-right">
                        <h4 class="secondary-color">LOCALIZE</h4>
                        <h3 class="margin-bottom-half">Multilingual Communications</h3>
                        <p>
                            Our purpose is to help companies prepare their products and services for worldwide deployment by
                            providing high-quality translation, localization and multilingual services.
                        </p>
                        <span class="content-link">
                            <a href="{{ route('practice.area') }}" target="_blank">
                                Learn More <i class="fa fa-chevron-right"></i>
                            </a>
                        </span>
                    </div>
                    <div class="clear"></div>
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
                    <a href="" target="_blank">
                        <img src="img/client-logos/1.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/2.jpeg" class="img-fluid" alt=""></a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/3.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/4.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/5.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/6.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/7.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/29.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="row company-logos company-logos-second mt-2">
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/8.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/9.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/10.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/11.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/12.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/13.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/14.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/30.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="row company-logos company-logos-second mt-2">
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/15.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/16.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/17.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/18.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/19.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/20.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/21.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="" target="_blank">
                        <img src="img/client-logos/31.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <a href="" class="btn btn-secondary text-capitalize mt-4">More clients
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- testimonies --}}
    <div class="container mt-1 testimonials" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-1 mt-4">
                <p>WHAT OUR CLIENTS SAY ABOUT US</p>
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
    <div class="container mt-1 practice-areas" data-aos="fade-up">
        <div class="row g-0">
            <div class="col-md-12 text-center mb-1">
                <h2 class=" text-capitalize main"><span>Sectors</span></h2>
            </div>
        </div>
        <div class="practice-area-containers">
            <div class="row">
                <div class="col-lg-3 mt-4">
                    <a href="">
                        <figure class="practice-area-description">
                            <img src="img/sectors/consumer.jpg" />
                            <figcaption>
                                <h2>consumer goods </h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="">
                        <figure class="practice-area-description">
                            <img src="img/sectors/energy.jpg" />
                            <figcaption>
                                <h2>energy</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="">
                        <figure class="practice-area-description">
                            <img src="img/sectors/currency.jpg" />
                            <figcaption>
                                <h2>financial services</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="">
                        <figure class="practice-area-description">
                            <img src="img/sectors/public-sector.jpg" />
                            <figcaption>
                                <h2>public sector</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 mt-4">
                    <a href="">
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
                    <a href="">
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
                    <a href="">
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
                    <a href="">
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
    <!-- Insights -->
    <div class="container news-section mt-5" data-aos="fade-up">
        <div class="row g-0">
            <div class="col-md-12 mb-4 text-center">
                <h3 class="text-capitalize main"><span>Insights</span></h3>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-4 ">
                <a target="_blank"
                    href="https://www.citizen.digital/opinion-blogs/opinion-high-stakes-for-african-countries-at-the-12th-wto-ministerial-conference-n299846">
                    <main>
                        <div class='normal '>
                            <div class='module'>
                                <div class='thumbnail'>
                                    <img src="{{ asset('img/insights/1.webp') }}">
                                    <div class='date'>
                                        <div>10</div>
                                        <div>JUn</div>
                                    </div>
                                </div>
                                <div class='content'>
                                    <h1 class='title'>High Stakes For African Countries At The 12th WTO Ministerial
                                        Conference</h1>
                                    <div class="description">
                                        Is the global trade system broken? Some would argue that it isn’t, and some insist
                                        that it is long overdue for an overhaul. Many among the latter are African
                                        governments that point to the disproportionately high impact that global crises have
                                        on their fragile economies through trade disruptions.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </a>
            </div>
            <div class="col-lg-4 ">
                <a href="">
                    <main>
                        <div class='normal '>
                            <div class='module'>
                                <div class='thumbnail'>
                                    <img src="https://www.newmark-imc.com/images/Pima-Pressure.jpg">
                                    <div class='date'>
                                        <div>27</div>
                                        <div>Mar</div>
                                    </div>
                                </div>
                                <div class='content'>
                                    <h1 class='title'>The World Needs Universal Health Care</h1>
                                    <div class="description">
                                        Universal Health Care (UHC) refers to the provision of health care to all
                                        individuals and communities without regard to their financial circumstances. It
                                        encompasses the whole range of necessary, high-quality health services, from
                                        prevention through treatment, rehabilitation, and palliative care for people of all
                                        ages.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </a>
            </div>
            <div class="col-lg-4 ">
                <a href="">
                    <main>
                        <div class='normal '>
                            <div class='module'>
                                <div class='thumbnail'>
                                    <img
                                        src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1544&q=80">
                                    <div class='date'>
                                        <div>27</div>
                                        <div>Jan</div>
                                    </div>
                                </div>
                                <div class='content'>
                                    <h1 class='title'>Ways Cities Are Tackling The Global Affordable Housing Crisis</h1>
                                    <div class="description">
                                        The unprecedented rate of urbanization across the world has led to increased demand
                                        for good, affordable housing. A recent survey revealed that of 200 cities polled
                                        around the globe, 90% were considered unaffordable when applying the widely-used
                                        standard of average house prices being more than three-times median income.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </a>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <a href="" class="btn btn-secondary-outline text-capitalize mt-4">Read More
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
            {{-- <div class="col-md-3 intro ">
                <div class="intro-content">
                    <h3 class="headings text-white mb-1">Gallery </h3>
                    <p class="p-main text-white mt-4">
                        Our strong footprint in Africa enables us to develop a multicultural and
                        authentically localized approach to messaging, strategy and engagement
                        to our clients across the continent. Find the office nearest you and
                        reach out.
                    </p>
                </div>
            </div> --}}
            <div class="col-md-12">
                <div class="text-center gallery-carousel-items">
                    <div class="item gallery-carousel card">
                        <div class="team gallery-style">
                            <div class="gallery-img">
                                <a href="img/gallery/5.jpg" data-fancybox="group" data-caption="" data-description="">
                                    <img class="img-fluid" src="img/gallery/5.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="item gallery-carousel card">
                        <div class="team gallery-style">
                            <div class="gallery-img">
                                <a href="img/gallery/5.jpg" data-fancybox="group" data-caption="" data-description="">
                                    <img class="img-fluid" src="img/gallery/5.jpg" alt="">
                                </a>
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
    <div class="m-3 module image-text-split-module case-study-module has-link module-11 white-background"
        data-aos="fade-up" data-id="module-image_text_split-11" id="content-11">
        <a href="#" class="no-hover">
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
                        <p class="background-color-text margin-bottom text-muted">We see holes in existing
                            marketing services as invitations to innovate. Our clients have their
                            pick of a variety of award-winning proprietary tools and programs aimed
                            at addressing their total needs, from a brand publishing platform to a
                            real-time storytelling tool and a crisis preparation platform.</p>
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
