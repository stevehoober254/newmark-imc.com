@extends('layouts.public')
@section('title')
    {{ $ourExpertise->title ?? 'Expertise' }}
@endsection
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
            @elseif ($slug == 'newmarkx')
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
                                            <h2>Event Strategy, Content & Management</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-1 single-department">
                                        <a>
                                            <h2>Experiential Marketing</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-2 single-department">
                                        <a>
                                            <h2>Event Design & Production</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 single-department">
                                        <div class="newmark-practice-area-img-wrapper">
                                            <img src="https://images.unsplash.com/photo-1486591978090-58e619d37fe7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
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
                                            <h2>Event Technology and AV Setups</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-5 single-department">
                                        <a>
                                            <h2>Hybrid & Virtual Events</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-5 single-department">
                                        <a>
                                            <h2>Event Protocol & Logististics</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 single-department">
                                        <div class="newmark-practice-area-img-wrapper">
                                            <img src="{{ asset('img/newmark-x/we-empower.jpeg') }}" alt="We Connect">
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
                                            <h2>In-site Brand Activations</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-6 single-department">
                                        <a>
                                            <h2>Merchandising</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-6 single-department">
                                        <a>
                                            <h2>Roadshows</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 single-department">
                                        <div class="newmark-practice-area-img-wrapper">
                                            <img src="{{ asset('img/newmark-x/we-activate.jpeg') }}" alt="We Activate">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmark-imc')
                <div class="newmark-practice-areas pt-4 pb-4">
                    <div class="container">
                        <div class="row g-0 we-connect-bg mb-2">
                            <div class="col-md-4 text-center we-connect">
                                <h1>We Empower</h1>
                            </div>
                            <div class="col-md-8">
                                <div class="row g-0">
                                    <div class="col-md-6 bg-white single-department">
                                        <a>
                                            <h2>Training Programmes</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-1 single-department">
                                        <a>
                                            <h2>Executive Coaching</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-2 single-department">
                                        <a>
                                            <h2>Brand Consultancy</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 single-department">
                                        <div class="newmark-practice-area-img-wrapper">
                                            <img src="{{ asset('img/homepage/2.jpg') }}" alt="We Empower">
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
                                            <h2>360 Degree Campaigns</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-5 single-department">
                                        <a>
                                            <h2>InfluenceXXI</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-5 single-department">
                                        <a>
                                            <h2>Trends & Publications</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 single-department">
                                        <div class="newmark-practice-area-img-wrapper">
                                            <img src="{{ asset('img/newmark/influence21.png') }}" alt="We Connect">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center we-connect bg-3 order-lg-2 order-sm-1">
                                <h1>We Activate</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmark-creative')
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
                                            <h2>Art Direction & Strategy</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-1 single-department">
                                        <a>
                                            <h2>Creative design</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-2 single-department">
                                        <a>
                                            <h2>Multimedia content</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 single-department">
                                        <div class="newmark-practice-area-img-wrapper">
                                            <img src="{{ asset('img/newmark-creative.png') }}" alt="We Connect">
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
                                            <h2>Brand Identity</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 bg-5 single-department">
                                        <a>
                                            <h2>Animation & Viral Video</h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col-md-6 bg-5 single-department">
                                        <a>
                                            <h2>Copywriting</h2>
                                        </a>
                                    </div>
                                    <div class="col-md-6 single-department">
                                        <div class="newmark-practice-area-img-wrapper">
                                            <img src="{{ asset('img/light.png') }}" alt="We Connect">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center we-connect bg-3 order-lg-2 order-sm-1">
                                <h1>We Empower</h1>
                            </div>
                        </div>
                    </div>
                </div>
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
    <div class="container mt-3 testimonials" data-aos="fade-up">
        @if ($slug != 'newmark-imc')
            <div class="row">
                <div class="col-lg-12 text-center mb-1 mt-4">
                    <h2 class="text-capitalize"><span>WHAT OUR CLIENTS SAY</span></h2>
                </div>
            </div>
        @endif
        @if ($slug == 'newmark-digital')
            <div class="row testimonials-carousel text-center">
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
            <div class="row testimonials-carousel text-center">
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
        @elseif ($slug == 'newmarkx')
            <div class="row testimonials-carousel text-center">
                <div class="testimony-card">
                    <i class="fa fa-quote-left"></i>
                    <div class="testimony-desc">
                        <p>
                            We selected Newmark Group as one of the partners who provided Event Management services during
                            the 2nd ACCA, which gathered more than 500 participants from all over the world. <br>
                            We appreciate Newmark’s professionalism, personalised attention to detail, flexibility and
                            creative approach to making our events a success. We highly recommend this accomplished team.
                        </p>
                    </div>
                    <div class="testimony-author">
                        <h6>African Conservation Tillage Network</h6>
                    </div>
                </div>
                <div class="testimony-card">
                    <i class="fa fa-quote-left"></i>
                    <div class="testimony-desc">
                        <p>
                            I would like to formally acknowledge and endorse Newmark Group Limited as an outstanding media
                            relations, communications and event management partner for the November 2020 AACOSE (Annual
                            Africa Conference on Social Entrepreneurship), a first of its kind hybrid conference that was
                            hosted by the Tangaza University College and us, Ashoka EA. <br> We had a very strong
                            traditional and online media presence and coverage appearing in tier one Kenyan TV and print
                            outlets.
                            <br>
                            Newmark Group Limited managed all aspects of the launch from beginning to the end, which
                            resulted in an unequivocal success not only for our organization but for the community at large.
                        </p>
                    </div>
                    <div class="testimony-author">
                        <h6>Ashoka East Africa</h6>
                    </div>
                </div>
            </div>
        @elseif ($slug == 'newmark-creative')
            <div class="row testimonials-carousel text-center">
                <div class="testimony-card">
                    <i class="fa fa-quote-left"></i>
                    <div class="testimony-desc">
                        <p>
                            The Newmark Group provided media relations, photography and videography, social media and
                            creative branding services. They were able to help us amplify the launch and achieve an audience
                            reach of 106.2 million from pan African media, local TV, radio, print and online outlets. We
                            were pleased with the results which further solidifies the partnership between Ashoka and
                            Newmark Group and we are looking forward to further collaborations.
                        </p>
                    </div>
                    <div class="testimony-author">
                        <h6>Ashoka Africa</h6>
                    </div>
                </div>
                <div class="testimony-card">
                    <i class="fa fa-quote-left"></i>
                    <div class="testimony-desc">
                        <p>
                            We appreciate Newmark’s professionalism, personalised attention to detail, flexibility and
                            creative approach to making our events a success. We highly recommend this accomplished team.
                        </p>
                    </div>
                    <div class="testimony-author">
                        <h6>African Conservation Tillage Network</h6>
                    </div>
                </div>
            </div>
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
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">AFRAA</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/6.png') }}" alt="AFRAA">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/7.jpg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/8.jpg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h4>Region: <span>Morocco, Kenya, Tanzania, Ghana, Nigeria, Cameroun, Ethiopia</span>
                                    </h4>
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
                                    full spectrum of its expertise including brand storytelling, event management, graphic
                                    and creative design, social media amplification and multimedia capabilities to ensure
                                    visibility at every level.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    The agency successfully handled communications at AFRAA’s 50th Annual General Assembly,
                                    the continental meeting that brings together more aviation stakeholders and decision
                                    makers than any other event in the continent by actively engaging participants with the
                                    brand throughout the convening period with strategic visibility tools. The newsroom
                                    generated coverage across key markets including Morocco, Kenya, Tanzania, Ghana,
                                    Nigeria, Cameroun, Ethiopia among others. The visibility was also sustained and
                                    amplified through AFRAA’s digital channels including Twitter, Facebook, LinkedIn and
                                    YouTube and generated 46.4k impressions over two days. In addition to this, the agency
                                    has supported numerous events and created visibility these including high-level meetings
                                    such as AFCAC's 30th Plenary Session in Livingstone, ICANN2018, the 11th ICAO Air
                                    Services Negotiation Event (ICAN2018).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">COPIA</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/pr/copia.png') }}" alt="COPIA">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/9.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/10.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h4>Region: <span>Kenya,Uganda</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    By harnessing mobile technologies and a network of local agents, and proprietary
                                    logistics technology, Copia Global is the first and only mobile commerce platform built
                                    to serve middle to low-income African consumers, regardless of their income level,
                                    access to technology, or location. Newmark Group was The Newmark Group supported the
                                    above initiative by developing a press kit comprising of a press release and fact sheet.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark Group supported in building the brands media visibility and amplifying its role
                                    and impact through e-commerce. The Newmark team oversaw planning and implementation of
                                    its media strategy and thought leadership strategy in Kenya and Uganda.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    Newmark successfully planned and managed media visibility opportunities for Copia every
                                    month for one year. More than 60 coverage pieces were generated across Kenya and Uganda.
                                    Many of the well structured media outcomes were picked up by bloggers and trended on the
                                    day of distribution. Newmark successfully planned and managed all media logistics,
                                    including media training the Copia Global Founder and re-designing Copia’s key messages.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">CELLULANT</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/pr/CELLULANT.png') }}" alt="CELLULANT">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/11.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/12.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
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
                                    Cellulant Corporation is a developer of mobile payments ecosystems through the provision
                                    of mobile wallet, transaction banking and mobile payment gateway solutions to financial
                                    inclusion businesses such as commercial banks and large micro-finance institutions and
                                    other clients. October 2021 Cellulant announced a new CEO and Newmark Group was tasked
                                    with complementing media activities surrounding the announcement.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark designed and rolled out a high-level communications and media relations
                                    programme to support the announcement with focus to post announcement top tier media
                                    interviews. The Newmark Group was also tasked to plan for a multi- channel media
                                    outreach that would amplify the announcement of Cellulant’s new Group CEO in Kenya.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    During the announcement, Newmark Group supported in building conversations around the
                                    brand in the media by securing top tier engagements via interviews with KTN Kenya, CNBC
                                    News, The Africa Report, Business Daily Kenya and Quartz
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">NOVARTIS</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/novartis.svg') }}" alt="NOVARTIS">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/13.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/14.jpg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h4>Region: <span>Ghana</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    Cellulant Corporation is a developer of mobile payments ecosystems through the provision
                                    of mobile wallet, transaction banking and mobile payment gateway solutions to financial
                                    inclusion businesses such as commercial banks and large micro-finance institutions and
                                    other clients. October 2021 Cellulant announced a new CEO and Newmark Group was tasked
                                    with complementing media activities surrounding the announcement.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark designed and rolled out a high-level communications and media relations
                                    programme to support the announcement with focus to post announcement top tier media
                                    interviews. The Newmark Group was also tasked to plan for a multi- channel media
                                    outreach that would amplify the announcement of Cellulant’s new Group CEO in Kenya.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    During the announcement, Newmark Group supported in building conversations around the
                                    brand in the media by securing top tier engagements via interviews with KTN Kenya, CNBC
                                    News, The Africa Report, Business Daily Kenya and Quartz
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">Pfizer UpJohn</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/pfizer.svg') }}" alt="Pfizer UpJohn">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/15.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/16.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
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
                                    Upjohn is a business division of the global pharmaceutical company Pfizer, which
                                    operates Pfizer's off-patent branded and generic established medicines business. The
                                    brand is also charged with leading NCD narratives globally. In 2020, the company
                                    partnered with the Kenya Cardiac Society and other stakeholders in Kenya to provide
                                    education and awareness on how Covid-19 has impacted people living with NCDs. Newmark
                                    provided communication support to the campaign.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark designed and managed a webinar that targeted healthcare providers and patient
                                    groups on the messages. The agency also developed and distributed a press release to
                                    targeted media outlets in Kenya. Media strategies also included securing media interview
                                    in top health platforms to promote the campaign messages and create education and
                                    awareness on how patients can censure continuity of care during the pandemic
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    After the campaign, 22 coverage pieces were gathered in Kenya, with a total of over 20M
                                    people reached and over Ksh 3 million advertising value equivalency achieved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">SISU GLOBAL HEALTH</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/pr/SISU GLOBAL HEALTH.jpeg') }}" alt="SISU GLOBAL HEALTH">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/17.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/18.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
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
                                    Sisu is a medical device company that designs and commercializes medical devices with
                                    and for emerging markets.
                                </p>
                                <p>
                                    In 2019 , Newmark organised a press briefing for Amref Health Africa, Sisu Global Health
                                    and Surgipharm to announce their partnership and officially introduce HemafuseTM in
                                    Kenya. Hemafuse in an autotransfusion device that would aid in relevant surgical
                                    procedures.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark developed a communication plan that targeted top media outlets in Kenya for the
                                    launch coverage. Newmark also supported event design and management for the launch and
                                    managed all the invited stakeholders during the launch.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    Through Newmark’s communication support, the event garnered coverage from top media
                                    outlets such as Nation Media Group, K24 TV, Ebru TV, Standard Media Group, Royal Media
                                    Services, Radio Africa Group and Capital FM. A total of 29 coverage pieces were
                                    received.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">JOHNSON AND JOHNSON</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/pr/JJ-logo.jpg') }}" alt="JOHNSON AND JOHNSON">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/19.jpg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/20.jpg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h4>Region: <span>Kenya, Ghana</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    Johnson and Johnson is a multinational manufacturer of pharmaceutical products, medical
                                    devices and consumer products. In a move to expand their global presence in Africa,
                                    Johnson & Johnson planned office launches in Kenya and Ghana, which would serve as the
                                    regional offices for East and West Africa respectively. Building on our strong expertise
                                    in Event Management and Media Relations, Johnson & Johnson contacted Newmark Group to
                                    support in regional offices launch. The Newmark team oversaw planning and implementation
                                    of media conferences, lunch events, ribbon cutting ceremonies, healthcare thought
                                    leadership panels in both countries and walk-through visits by Senior Government
                                    Officials that led to making the office openings successful.
                                </p>
                                <p>
                                    In 2019 , Newmark organised a press briefing for Amref Health Africa, Sisu Global Health
                                    and Surgipharm to announce their partnership and officially introduce HemafuseTM in
                                    Kenya. Hemafuse in an autotransfusion device that would aid in relevant surgical
                                    procedures.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Our expertise in the full spectrum of communications from: digital, public affairs,
                                    media relations, logistical facilitation and event management would be critical to the
                                    success of the launches.The main communication angle for the media messaging was that
                                    Johnson & Johnson, a multinational company had joined the list of investors in Africa to
                                    improve the healthcare sector through innovation. Global coordination was essential in
                                    ensuring that strategic priorities translate into market impact. In terms of thought
                                    Leadership, the Edelman/Newmark Team designed a high-level panel session that was
                                    embedded in the launch event and was moderated by Newmark CEO Gilbert Manirakiza.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    Newmark successfully planned and managed 6 pre- event TV interviews in Kenya and Ghana.
                                    We also secured the attendance of 30 reporters to attend the launch in Kenya in each
                                    country. A total of 57 coverage pieces were generated from the launch in Kenya, while we
                                    generated 47 pieces of coverage in Ghana. The Kenya launch event trended on Twitter on
                                    the day of the launch between 2.00pm to 01:00am. Newmark successfully planned and
                                    managed all event logistics, including designing the agenda, selecting attendees and
                                    running the various sessions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">AON - Minet</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/pr/minet.png') }}" alt="AON - Minet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/21.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/22.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h4>Region: <span>Kenya, Ghana</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    Following its earlier announcement to change the ownership structure of its operations
                                    across several sub-Saharan countries, Aon plc the global leader in insurance broker,
                                    needed to unveil its new brand identity dubbed Minet in Kenya and Uganda.Newmark was
                                    approached to organise the launch event as well as to plan for a multi-channel media
                                    outreach that would amplify the unveiling of Minet and at the same time enhance the
                                    brand recognition within the regions.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark designed a communications and media relations plan specifically targeting tier
                                    one media outlets in Kenya and Uganda and leveraged this by organizing one on one
                                    interviews with the key spokespersons before the launch event. Post-event media
                                    monitoring was carried out afterwards, in order to establish the reach of the message
                                    the forum intended to put out. On the other hand, our events team set out to create a
                                    unique, afro-centric dinner event that set the visual tone for the theme and context of
                                    the engagement. Newmark also offered multimedia support to complement the media outreach
                                    plan, which comprised of photography and videography services for the whole event.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    The announcement, which was attended by key business journalists, was well received in
                                    regional top-tier media outlets thereby securing an impressive coverage across all
                                    channels including a total of 21 articles in Kenya and 9 in Uganda respectively.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmarkx')
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">NOVARTIS</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/novartis.svg') }}" alt="NOVARTIS">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/13.png') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/pr/14.jpg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h4>Region: <span>Ghana</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    Novartis, an Internationally acclaimed global healthcare company needed to officially
                                    launch the first licensed therapy for sickle cell disease (SCD) in Ghana in the form of
                                    a public-private partnership event. This was to be done in collaboration with the
                                    Government of Ghana, the Sickle Cell Foundation of Ghana. The event was attended by the
                                    Global CEO of Novartis and the Vice President of the Republic of Ghana
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark’s strategic approach involved mapping all stakeholders and key media influencers
                                    for meetings and briefing on the partnership. An integrated, multi-platform
                                    communication approach was deployed, combining owned and earned media as the core
                                    pillars of the event mobilization.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <ul>
                                    <li>
                                        The event was organized seamlessly with over six-hundred people attending.
                                    </li>
                                    <li>
                                        Traditional media coverage has been massive across the region.
                                    </li>
                                    <li>
                                        The narratives around the project got very sound approvals.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">Rockefeller Foundation</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/Rockefeller-Foundation.png') }}"
                                        alt="Rockefeller Foundation">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-x/1.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
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
                                    The Rockefeller Foundation Africa Regional Office needed to organise an inclusive
                                    economies forum for Africa which would attract senior decision-makers and thinkers from
                                    across Private, Public and Development sectors to interrogate the theme.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    For this Africa-focused event, Newmark was tasked with providing support the ARO office
                                    over a period of 4 months to design and execute communications, media and event
                                    management strategies that would yield high participation, quality debates and value.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <ul>
                                    <li>
                                        The event was organized seamlessly with over six-hundred people attending.
                                    </li>
                                    <li>
                                        Traditional media coverage has been massive across the region.
                                    </li>
                                    <li>
                                        The narratives around the project got very sound approvals.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">Minet Kenya</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/pr/minet.png') }}" alt="AON - Minet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/top-header.jpg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-x/3.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
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
                                    Following its earlier announcement to change the ownership structure of its operations
                                    across several sub-Saharan countries, Aon plc the global leader in insurance broker,
                                    needed to unveil its new brand identity dubbed Minet in Kenya and Uganda.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark was approached to organise the launch event as well as to plan for a
                                    multi-channel media outreach that would amplify the unveiling of Minet and at the same
                                    time enhance the brand recognition within the regions.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    Newmark designed a communications and media relations plan specifically targeting tier
                                    one media outlets in Kenya and Uganda. Our events team also set out to create a unique,
                                    afrocentric dinner event that set the visual tone for the theme and context of the
                                    engagement. We also offered multimedia support to complement the media outreach plan,
                                    which comprised of photography and videography services for the whole event.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">AACOSE</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/newmark-x/aacose.jpeg') }}" alt="AON - Minet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-x/4.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-x/5.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
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
                                    The Annual Africa Conference on Social Entrepreneurship (AACOSE), organized jointly by
                                    Tangaza University College and Ashoka East Africa, was an initiative set in place to
                                    foster the interaction between the key actors that contribute to creating favourable
                                    conditions for the growth of sustainable social enterprises in Africa through uncovering
                                    answers to critical questions through a sector-specific lens on selected key thematic
                                    areas.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark’s strategic approach involved carrying out a 360 degree event management scope,
                                    including project strategy and coordination, delegate management, creative design,
                                    multimedia through audio-visual, live streaming, and photography, supplier management
                                    and event setup and media relations through the creation of press releases and media
                                    related content
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <ul>
                                    <li>
                                        We got a total of an average 200 attendees to the hybrid conference
                                    </li>
                                    <li>
                                        We launched the AACOSE research initiative to drive evidence-based innovations,
                                        capacity building, and policy interventions to support the growth of social
                                        entrepreneurship and changemaking across institutions of higher learning
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">PASCAR CONGRESS</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/pascar.png') }}" alt="AON - Minet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-x/6.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark-x/7.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
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
                                    The Kenya Cardiac Society (KCS) in conjunction with the Pan-African Society of
                                    Cardiology (PASCAR) wanted to host the 15th edition of the PASCAR Congress in Mombasa,
                                    Kenya. The goal was to host members from the Africa wide PASCAR leadership team as well
                                    as leading cardiologists and key ecosystem players across countries and organizations in
                                    Africa and beyond.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark’s strategic approach involved carrying out a 360 degree event management scope,
                                    including project strategy and coordination, delegate management, creative design,
                                    multimedia through audio-visual, live streaming, and photography, supplier management,
                                    sponsorship & exhibition management, website development and event setup.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <ul>
                                    <li>
                                        We got more than 300 attendees present physically throughout the conference in
                                        Mombasa, more than 100 virtually, 115 faculty
                                    </li>
                                    <li>
                                        We were able to successfully engage and have onboard 64 sponsors and exhibitors.
                                    </li>
                                    <li>
                                        The hybrid transmission enabled the livestreaming of a live medical procedure
                                        (Balloon Valvuloplasty) from the Coast General Teaching & Referral Hospital, to the
                                        conferencing room
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmark-imc')
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">Absa</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/3.png') }}" alt="AON - Minet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/absa.jpg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/absa-2.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h4>Region: <span>Seychelles, Botswana, Uganda, Tanzania, Ghana, Zambia, Mauritius and
                                            Kenya</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    Absa Bank PLC is arguably one of Africa’s largest diversified financial services group
                                    with a presence in 12 countries across the continent. Newmark has been a ket Capacity
                                    Development and Coaching partner since the Bank rebranded from Barclays. As a key player
                                    in the financial services market in Africa, the company has regularly entrusted our team
                                    to conduct executive media training and strategy coaching for senior executives,
                                    including Managing Directors, Country Management Committees and other senior personnel
                                    who may be called upon to position the brand in various fora.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Leveraging the knowledge and experience gained from closely collaborating with various
                                    teams across the continent, Newmark has been able to customize a programme that
                                    seamlessly integrates best practices to maximize interaction with media with Barclays
                                    now Absa’s values and overarching reputation goals.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    This collaboration has led to the successful training of Barclays now Absa executive
                                    staff in the following markets: Seychelles, Botswana, Uganda, Tanzania, Ghana, Zambia
                                    and Kenya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">QNET-FinGreen</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/fingreen.png') }}" alt="AON - Minet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark/1.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/newmark/2.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
                                    <h4>Region: <span>Federal Republic of Nigeria</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 bg-3 text-white">
                        <div class="case-study-description">
                            <div class="ambition">
                                <h5>Ambition</h5>
                                <p>
                                    Qnet is global e-commerce based direct selling company that provides customers around
                                    the world with unique high-quality products and services while allowing them to build a
                                    sales business by promoting these products.
                                    FinGreen is QNET's signature programme for financial literacy, aiming to develop healthy
                                    financial habits through education and training in the most vulnerable communities.
                                    Conceived in 2021,FinGreen aims to build essential financial knowledge and skills, such
                                    as a firm foundation for managing money, savings, and payments, alongside empowering
                                    individuals to become knowledge leaders who can encourage financial education in their
                                    community especially among young adults.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Newmark Group sourced and onboarded implementing and media partners for the execution of
                                    the project.
                                    We availed a detailed roll out plan after extensive baseline research in conjunction
                                    with QNET and implementing partners and followed through with monitoring and evaluation.
                                    Newmark also developed and coordinated all communication strategies and collaterals.
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    So far, over 571 young adults through a peer-to-peer model in communities like Ikeja,
                                    Ikorodu, Ogun, and Oyo states have received financial literacy training through the
                                    FinGreen project with a promising increment in subsequent phases of the project.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmark-creative')
                <div class="row case-studies-card g-0 display-flex">
                    <div class="col-md-12 text-center">
                        <h6 class="case-study-heading mb-3 mt-3">MKWC</h6>
                    </div>
                    <div class="col-md-5">
                        <div class="row g-0">
                            <div class="col-md-6 center-item-vertically bg-white">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/mkwc.png') }}" alt="MKWC">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/mkwc-1.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="case-study-client-imgs">
                                    <img src="{{ asset('img/mkwc-2.jpeg') }}" alt="Client">
                                </div>
                            </div>
                            <div class="col-md-6 center-item-vertically bg-1">
                                <div class="case-study-client-region">
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
                                    The Mount Kenya Wildlife Conservancy (MKWC) wanted to commence the set up of the Mawingu
                                    Mountain Bongo Sanctuary, in line with the fundamental element of the National Recovery
                                    and Action Plan for the Mountain Bongo 2019 – 2023. In light of this, they wanted an
                                    agency who could help deliver the experiential, communication and creative design
                                    element to help in the delivery of this huge Milestone
                                    encourage financial education in their community especially among young adults.
                                </p>
                            </div>
                            <div class="action">
                                <h5>Action</h5>
                                <p>
                                    Leveraging the knowledge and experience gained from working in countless projects across
                                    Africa, Newmark was able to develop a robust work plan that saw the execution of the
                                    event that brought together the Ministry of Tourism and Wildlife, the Kenya Wildlife
                                    Service and the Kenya Forest Service launched the Mawingu Mountain Bongo Sanctuary on
                                    14th December 2020.
                                </p>
                                <p>
                                    As part of the deliverables, we managed to design a number of collaterals, including;
                                    banners, branded items (facemasks, pocket sanitizers, do not sit here stickers) & event
                                    programs
                                </p>
                            </div>
                            <div class="results">
                                <h5>Results</h5>
                                <p>
                                    The event was attended by a host of stakeholders in the wildlife conservation community
                                    such as dignitaries from the National Government, environmental enthusiasts, scientific
                                    community, diplomats and wardens who represented Laikipia County, despite being a
                                    partial lockdown period
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
