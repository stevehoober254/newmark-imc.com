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
                                @if ($ourExpertise->expertise_logo)
                                    <img src="{{ $ourExpertise->expertise_logo->getUrl() }}"
                                        alt="{{ $ourExpertise->title ?? '' }}">
                                @endif
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
                                About {{ $ourExpertise->title ?? '' }}
                            </h5>
                            <p class="card-text mt-3">
                                {!! $ourExpertise->description ?? '' !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-sm-2">

                        @if ($ourExpertise->image)
                            <img src="{{ $ourExpertise->image->getUrl() }}" class="img-fluid rounded-start"
                                alt="{{ $ourExpertise->title ?? '' }}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4" data-aos="fade-up">
        <div class="practice-area-services">
            <div class="row">
                <div class="col-lg-12 text-center mb-1 mt-4">
                    <h2 class="text-capitalize"><span>our services</span></h2>
                </div>
            </div>
            @if ($slug == 'newmark-digital')
                <div class="row practice-area-service-details text-white box-shadow">
                    <div class="col center-item-vertically bg-main">
                        <div class="service-heading">
                            <h3>SOCIAL MEDIA MANAGEMENT</h3>
                            <h5>Connect with your tribe</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-6 center-item-vertically bg-3">
                                <div class="service-heading-wrapper">
                                    <h6>Profile activation and management</h6>
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-4">
                                <div class="service-heading-wrapper">
                                    <h6>Strategy and positioning</h6>
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-7 text-dark">
                                <div class="service-heading-wrapper">
                                    <h6>Content curation and creation</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img-wrapper">
                                    <img src="{{ asset('img/newmark-digital/2.jpg') }}" alt="SOCIAL MEDIA MANAGEMENT">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row practice-area-service-details text-white box-shadow">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-6 center-item-vertically bg-3">
                                <div class="service-heading-wrapper">
                                    <h6>Profile activation and management</h6>
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-4">
                                <div class="service-heading-wrapper">
                                    <h6>Strategy and positioning</h6>
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-main">
                                <div class="service-heading-wrapper">
                                    <h6>Content curation and creation</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img-wrapper">
                                    <img src="https://images.unsplash.com/photo-1501250987900-211872d97eaa?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                                        alt="SOCIAL MEDIA & INFLUENCER MANAGEMENT">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col center-item-vertically bg-main">
                        <div class="service-heading">
                            <h3>CONTENT MARKETING AND SEARCH ENGINE OPTIMIZATION</h3>
                            <h5>Expand your tribe</h5>
                        </div>
                    </div>
                </div>
                <div class="row practice-area-service-details text-white box-shadow">
                    <div class="col center-item-vertically bg-main">
                        <div class="service-heading">
                            <h3>INFLUENCER MANAGEMENT</h3>
                            <h5>Connect with your tribe</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-6 center-item-vertically bg-3">
                                <div class="service-heading-wrapper">
                                    <h6>Profile activation and management</h6>
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-4">
                                <div class="service-heading-wrapper">
                                    <h6>Strategy and positioning</h6>
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-7 text-dark">
                                <div class="service-heading-wrapper">
                                    <h6>Content curation and creation</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-img-wrapper">
                                    <img src="{{ asset('img/newmark-digital/1.jpg') }}" alt="INFLUENCER MANAGEMENT">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmark-public-relations')
                <div class="newmark-practice-areas pt-4 pb-4">
                    <div class="container">
                        <div class="row g-0 we-connect-bg mb-2">
                            <div class="col-md-4 text-center we-connect">
                                <h1>We Connect</h1>
                            </div>
                            <div class="col-md-8">
                                <div class="row g-0">
                                    <div class="col-md-6 bg-white single-department">
                                        <a>
                                            <h2>Media Relations</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-1 single-department">
                                        <a>
                                            <h2>Stakeholder Mapping & Management </h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-2 single-department">
                                        <a>
                                            <h2>Public Affairs</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 single-department">
                                        <div class="newmark-practice-area-img-wrapper">
                                            <img src="https://images.pexels.com/photos/4427931/pexels-photo-4427931.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                alt="We Connect">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 bg-3 mb-2">
                            <div class="col-md-8 order-sm-first order-last">
                                <div class="row g-0">
                                    <div class="col-md-6 bg-white single-department">
                                        <a>
                                            <h2>Strategy Design</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-5 single-department">
                                        <a>
                                            <h2>Communication Programme Design</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-5 single-department">
                                        <a>
                                            <h2>Thought Leadership</h2>
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
                                        <a>
                                            <h2>Crisis Communications</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-6 single-department">
                                        <a>
                                            <h2>Editorial Content</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-6 single-department">
                                        <a>
                                            <h2>CSR and Sustainability</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 single-department">
                                        <div class="newmark-practice-area-img-wrapper">
                                            <img src="https://images.pexels.com/photos/164829/pexels-photo-164829.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                                alt="We Activate">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmark-experiential')

            @elseif ($slug == 'newmark-imc')

            @elseif ($slug == 'newmark-creative')

            @elseif ($slug == 'newmark-creative')
            @endif
        </div>
    </div>
    {{-- @if (count($ourExpertise->client_logos) > 0)
        <div class="company-we-keep pb-4">
            <div class="container" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-md-12 text-center mb-4 mt-3">
                        <h2 class=" text-capitalize main text-white"><span>
                                We localize the global and globalize the local!
                            </span></h2>
                    </div>
                </div>
                <div class="row company-logos ">
                    @foreach ($ourExpertise->client_logos as $key => $media)
                        <div class="col-md-one-eighth">
                            <a>
                                <img src="{{ $media->getUrl() }}" class="img-fluid"
                                    alt="{{ $ourExpertise->title ?? '' }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif --}}
    <div class="company-we-keep pb-4">
        <div class="container" data-aos="fade-up">
            <div class="row g-0">
                <div class="col-md-12 text-center mb-4 mt-3">
                    <h2 class=" text-capitalize main text-white"><span>We localize the global and globalize the
                            local!</span></h2>
                </div>
            </div>
            <div class="row company-logos">
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/1.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/bill-melinda.svg') }}" class="img-fluid"
                            alt="Client Logo"></a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/3.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/4.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/5.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/6.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/7.jpg') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/pfizer.svg') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
            </div>
            <div class="row company-logos company-logos-second mt-2">
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/8.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/9.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/10.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/11.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/12.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/13.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/lives-and-livelihoods-fund.png') }}" class="img-fluid"
                            alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/30.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
            </div>
            <div class="row company-logos company-logos-second mt-2">
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/novartis.svg') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/16.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/17.jpg') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/18.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/19.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/20.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/21.png') }}" class="img-fluid" alt="Client Logo">
                    </a>
                </div>
                <div class="col">
                    <a>
                        <img src="{{ asset('img/client-logos/logo-GARID-01.png') }}" class="img-fluid"
                            alt="Client Logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- @if ($slug == 'newmark-digital')
    @elseif ($slug == 'newmark-public-relations')

    @elseif ($slug == 'newmark-experiential')

    @elseif ($slug == 'newmark-imc')

    @elseif ($slug == 'newmark-creative')

    @elseif ($slug == 'newmark-creative')
    @endif --}}
    {{-- testimonies --}}
    <div class="container mt-3 testimonials" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-1 mt-4">
                <h2 class="text-capitalize"><span>WHAT OUR CLIENTS SAY</span></h2>
            </div>
        </div>
        @if ($slug == 'newmark-digital')
            <div class="row text-center testimonials-carousel text-center">
                <div class="testimony-card">
                    <i class="fa fa-quote-left"></i>
                    <div class="testimony-desc">
                        <p>
                            We launched a couple of main products, announced new partnerships set all-time high records and
                            established new markets. You were on that journey all throughout and we cannot thank you enough
                            for the hard work and dedication to help as grow as a brand. Thank you for your invaluable input
                            and for always to pushing us to be the best in the industry.
                        </p>
                    </div>
                    <div class="testimony-author">
                        <h6>Nina, Paxful</h6>
                    </div>
                </div>
                <div class="testimony-card">
                    <i class="fa fa-quote-left"></i>
                    <div class="testimony-desc">
                        <p>
                            Thank you for the good job and professionalism
                            exhibited by your team especially Raissa
                            who was with us in Zanzibar and was very helpful
                            and coordinated the tasks meticulously. We truly
                            the extra effort to make sure the inaugural was
                            indeed a success.
                        </p>
                    </div>
                    <div class="testimony-author">
                        <h6>Turkish Airlines</h6>
                    </div>
                </div>
            </div>
        @elseif ($slug == 'newmark-public-relations')
            <div class="row text-center testimonials-carousel text-center">
                <div class="testimony-card">
                    <i class="fa fa-quote-left"></i>
                    <div class="testimony-desc">
                        <p>
                            Specifically as the client what I appreciated very much: <br>
                            - Komlas’ expertise to understand our needs and forward looking visions in a very short space of
                            time. <br>
                            - The Newmark team to proactively chase the Novartis team and ask challenging questions and
                            provide constructive solutions. <br>
                            - The credibility Komal and team have built up with H.E Vice President of Republic of Ghana and
                            other government offices helped our launch be seamless. <br>
                            - Our Global CEO said recently to an internal audience "this event was one of his major
                            highlights for 2019 and a proud moment in his career." <br>
                            You should be very proud of the team you have built. We for sure will continue to partner as we
                            scale our program across sub-Saharan Africa.
                        </p>
                    </div>
                    <div class="testimony-author">
                        <h6>Novartis</h6>
                    </div>
                </div>
                <div class="testimony-card">
                    <i class="fa fa-quote-left"></i>
                    <div class="testimony-desc">
                        <p>
                            Thank you for the good job and professionalism
                            exhibited by your team especially Raissa
                            who was with us in Zanzibar and was very helpful
                            and coordinated the tasks meticulously. We truly
                            the extra effort to make sure the inaugural was
                            indeed a success. Thanks for the great and impressive results.
                        </p>
                    </div>
                    <div class="testimony-author">
                        <h6>Turkish Airlines</h6>
                    </div>
                </div>
                <div class="testimony-card">
                    <i class="fa fa-quote-left"></i>
                    <div class="testimony-desc">
                        <p>
                            We launched a couple of main products, announced new partnerships, set all-time high records and
                            established new markets. You were on that journey all throughout and we cannot thank you enough
                            for the hard work and dedication to help us grow as a brand. Thanks for your invaluable input
                            and for always pushing us to be the best in the industry.
                        </p>
                    </div>
                    <div class="testimony-author">
                        <h6>Paxful</h6>
                    </div>
                </div>
            </div>
        @elseif ($slug == 'newmark-experiential')

        @elseif ($slug == 'newmark-imc')

        @elseif ($slug == 'newmark-creative')

        @elseif ($slug == 'newmark-creative')
        @endif
    </div>
    {{-- case studies --}}
    <div class="container mt-3 case-studies" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-1">
                <h2 class="text-capitalize">Case studies</h2>
            </div>
        </div>
        <div class="case-studies-carousel ">
            @if ($slug == 'newmark-digital')
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">Goma Serena - Amplifying a gem</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="https://voyagesafriq.com/wp-content/uploads/2019/11/AKFED-Serena-Hotel-Logo.gif"
                                        alt="Client Logo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-digital/7.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-digital/8.jpg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h3>Telling a giant story</h3>
                                    <h4>Region: <span>Democratic Republic of Congo</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    The Serena Group is one of the largest hotel chains operating in East Africa, and is
                                    known for delivering unique experiences to tourists in a uniquely localized manner. Upon
                                    the completion of the Serena property in Goma, a bustling city in the Eastern part of
                                    the Democratic Republic of the Congo (DRC), the management team tasked The Newmark Team
                                    to take up the task of building and telling the story of the property using Social
                                    Media.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    The Newmark team adopted a storytelling strategy to tell the introduce to the world the
                                    uniqueness of the Goma Serena and it’s host region. This approach consists of profiling
                                    the various attractions of the property within the backdrop of the region, with a focus
                                    on engagement and localization. Effective storytelling entails producing highly
                                    shareable and authentic content, but also keeping a finger on the pulse to understand
                                    the tastes and nuances of key target publics.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    To date, we have activated social media accounts that have generated - and continue to
                                    generate impressive momentum:
                                </p>
                                <ul>
                                    <li>Reach: Average Organic Reach per month: 20,000</li>
                                    <li>Engagement: Average Organic engagement/ month 800</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">AFRAA - A bigger voice for Aviation in Africa</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-2">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/6.png') }}" alt="Client Logo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-digital/9.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-digital/10.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h3>Telling a giant story </h3>
                                    <h4>Region: <span>Panafrican Scope</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    The African Airlines Association is the regional inter-carrier association established
                                    by African airlines to serve as the platform for cooperation and articulate matters of
                                    interest to African airlines in order to promote and protect their common interests. It
                                    is arguably the most significant continental aviation body however its mandate and
                                    activities are not well known or visible in Africa.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark has designed and is currently rolling out a high-level communications and media
                                    relations programme that strategically positions AFRAA as a highly visible leader and
                                    the voice for the African Aviation industry. Leveraging a content-centric and
                                    multi-channel approach, Newmark has established a dedicated newsroom that activates the
                                    full spectrum of its expertise including Digital marketing and social media activation.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    To date, we have activated social media accounts that have generated - and continue to
                                    generate impressive momentum:
                                </p>
                                <ul>
                                    <li>Designed and deployed the organization’s website and event portals that have been
                                        used to drive engagement at major stakeholder events across the continent</li>
                                    <li>Activated Social Media platforms that have positioned AFRAA as a thought-leading
                                        voice in the Aviation Sector in Africa and globally</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">TICAD 6 - A voice for inclusive development </h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/newmark-digital/ticad.png') }}" alt="Client Logo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-digital/11.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-digital/12.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h3>Telling a giant story </h3>
                                    <h4>Region: <span>Panafrican Scope</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    Upon deciding to move to Africa 6th edition of the TICAD conference, the Japanese Prime
                                    Minister’s office tasked Newmark to plan and activate a global media and social media
                                    campaign to announce and amplify the visibility of the event Globally
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark contributed to the design of an integrated campaign that consisted of a
                                    pre-TICAD media campaign, a Social Media campaign during the event, and a post-event
                                    monitoring and reporting process. We also set up a global newsroom that amplified the
                                    visibility of all TICAD6 events and announcements.
                                </p>
                                <p>
                                    The Newsroom was activated with a full contingent of 20 team members who covered the
                                    TICAD events on a 24 hour basis, updating all the relevant government social media
                                    platforms in real-time. This consisted of community management across tens of parallel
                                    sessions, with full photography and videography captioning, validation, sign-off and
                                    posting.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <ul>
                                    <li>Reach:</li>
                                    <li>Engagement:</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmark-public-relations')
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">Lives and Livelihoods Fund</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/pr/lives-and-livelihoods-fund-logo-vector.png') }}"
                                        alt="Lives and Livelihoods Fund">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/1.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/2.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h3>Telling a giant story</h3>
                                    <h4>Region: <span>Guinea, Senegal, Uganda</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    The Lives and Livelihoods Fund (Arabic: صندوق العيش والمعيشة) (LLF) is a $2.5 billion
                                    multilateral development initiative created by partners including the Islamic
                                    Development Bank (IsDB), the Bill & Melinda Gates Foundation,[1] the Kingdom of Saudi
                                    Arabia, the United Arab Emirates, the State of Qatar, and most recently the UK's
                                    Foreign, Commonwealth & Development Office . The five year fund is the "largest ever
                                    Middle-East based, fully-multilateral development initiative".
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    To raise the visibility of the projects, strategic communications and media outreach
                                    campaigns were executed in the countries to highlight the input of the LLF and the
                                    impact on local communities. Newmark Group designed a messaging structure
                                    on the poverty challenge being addressed and the project’s impact in the countries
                                    (communities and beneficiaries). Messaging about the LLF (purpose, design, donors and
                                    structure) and other projects of note in the country and regionally. Messaging about the
                                    importance of partnering with key stakeholders such as the government, donors, local
                                    partners and communities to achieve sustainable development.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    Newmark successfully planned, managed and secured the attendance of 30 reporters to
                                    attend the event in Conakry. A total of 70 coverage pieces were generated from the two
                                    country campaigns. Newmark successfully planned and managed all event logistics,
                                    including designing the agenda, multimedia support and managing on-ground media
                                    interviews.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">Dubai Tourism</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/pr/dtcm-logo-color.png') }}"
                                        alt="Lives and Livelihoods Fund">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/1.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/2.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h3>Telling a giant story</h3>
                                    <h4>Region: <span>Kenya</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    The Department of Tourism and Commerce Marketing (DTCM) is the principal authority for
                                    the planning, supervision, development and marketing of tourism in Dubai. In the
                                    realization of this mandate, Newmark was tasked to carry out a local media outreach and
                                    reputation management campaign that would promote Dubai as a destination of choice for
                                    Kenyans. The project involves coming up with editorial content for pitching to the media
                                    and managing any local events by DTCM, as well as identifying and supervising media
                                    trips to Dubai.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark designed an integrated communication campaign that aims at addressing some of
                                    the misconceptions that contributed to low visitor numbers from African countries.Apart
                                    from monthly editorial pitches on various Dubai offerings and on why the city should be
                                    the international destination of choice to Kenyans, Newmark also makes use of local
                                    events by DTCM to pitch for one on one media interviews with DTCM representatives.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    Increased coverage of Dubai and its offerings in the media.
                                </p>
                                <ul>
                                    <li>Better understanding of Dubai as a destination among the media, which has improved
                                        uptake of content on the city.</li>
                                    <li>A total of 30 articles pitched on Dubai in 2017</li>
                                    <li>A total of 49,076,486 reach of coverage for 2017</li>
                                    <li>A total of $164,619.35 total AVE attained for 2017 </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">AstraZeneca’s Healthy Heart Africa</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/10.png') }}" alt="Lives and Livelihoods Fund">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/3.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/4.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h3>Telling a giant story</h3>
                                    <h4>Region: <span>Kenya, Ghana, Ethiopia, Uganda, Senegal and Côte d’ivoire</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    Healthy Heart Africa (HHA) is AstraZeneca’s access to healthcare programme in Africa.
                                    The programme works in partnership with governments and implementing partners to halt
                                    and reverse the prevalence of hypertension in Africa. It is currently present in 7
                                    countries of implementation.
                                    Since its launch in 2014, Newmark was engaged as its communication partner in Africa,
                                    and the agency has been involved in the programmes expansion journey and across the
                                    continent.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    As the programmes communication partner, Newmark designs communication strategies across
                                    the programmes 9 markets and counting. Key scopes include multilingual media
                                    communication on the programs activities, impact and expansion journey. The agency also
                                    designs and manages the programmes visual identity, events, multimedia content, ensuring
                                    that its access to healthcare narrative is amplified
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    Newmark amplifies the role of HHA in providing education and awareness for hypertension
                                    in its countries of implementation. The agency has consistently delivered positive media
                                    coverage for the programme across its markets of implementation. In 2021 for example,
                                    Newmark carried out media relations in 6 countries, covering Kenya, Ghana, Ethiopia,
                                    Uganda, Senegal and Côte d’ivoire. This resulted in reaching over 21M people in
                                    individual countries and pan-Africa through platforms such as AllAfrica.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">PAXFUL</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/pr/paxful.png') }}" alt="PAXFUL">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/5.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/6.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h3>Telling a giant story</h3>
                                    <h4>Region: <span>Kenya</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    Healthy Heart Africa (HHA) is AstraZeneca’s access to healthcare programme in Africa.
                                    The programme works in partnership with governments and implementing partners to halt
                                    and reverse the prevalence of hypertension in Africa. It is currently present in 7
                                    countries of implementation.
                                    Since its launch in 2014, Newmark was engaged as its communication partner in Africa,
                                    and the agency has been involved in the programmes expansion journey and across the
                                    continent.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    As the programmes communication partner, Newmark designs communication strategies across
                                    the programmes 9 markets and counting. Key scopes include multilingual media
                                    communication on the programs activities, impact and expansion journey. The agency also
                                    designs and manages the programmes visual identity, events, multimedia content, ensuring
                                    that its access to healthcare narrative is amplified
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    Newmark amplifies the role of HHA in providing education and awareness for hypertension
                                    in its countries of implementation. The agency has consistently delivered positive media
                                    coverage for the programme across its markets of implementation. In 2021 for example,
                                    Newmark carried out media relations in 6 countries, covering Kenya, Ghana, Ethiopia,
                                    Uganda, Senegal and Côte d’ivoire. This resulted in reaching over 21M people in
                                    individual countries and pan-Africa through platforms such as AllAfrica.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmark-experiential')

            @elseif ($slug == 'newmark-imc')

            @elseif ($slug == 'newmark-creative')

            @elseif ($slug == 'newmark-creative')
            @endif
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
@endsection
