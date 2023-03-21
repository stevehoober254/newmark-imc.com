@extends('layouts.public')
@section('content')
    <div class="practice-area-top-header"
        style="background-image: url('https://images.pexels.com/photos/443383/pexels-photo-443383.jpeg?auto=compress&cs=tinysrgb&w=1600');">
        <div class="bg-fade-half">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase padding-center">About The Newmark IMC</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="breadcrumb">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ol class="breadcrumb-list list-unstyled d-flex">
                                        <li class="breadcrumb-item"><a class="text-white" href="/"><i
                                                    class="fas fa-home mr-2"></i>
                                                Home</a></li>
                                        <li class="breadcrumb-item active"><span>About The Newmark IMC</span></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="thick module-2 bright-purple-background" data-aos="fade-right" data-id="module-solid_line-2"
        id="content-2" />
    <div class="container mb-3 mt-3" data-aos="fade-up">
        <div class="our-business">
            <div class="bg-white end-strip">
                <div class="row g-0">
                    <div class="col-md-6 order-sm-1 order-2">
                        <div class="card-body">
                            <h5 class="card-title text-transfom-none headings">Who we are</h5>
                            <p class="card-text mt-1">
                                The Newmark Group Limited is a leading African Integrated Marketing Communications (IMC)
                                firm that ranks among the fastest growing with a strong presence in the Multinational Brand
                                segment of the market. With a footprint in over 30 countries in Africa, Newmark brings a
                                multicultural and authentically localized approach to messaging, outreach and engagement.
                            </p>
                            <p class="card-text">
                                Newmark’s wide team of strategy, creative, editorial and content experts enables us to
                                support leading local and global brands to understand their competitive landscape, enhance
                                their visibility and earn a strategic reputation that supports their business objectives.
                            </p>
                            <a href="{{ route('our-ceo') }}" class="btn btn-secondary-outline btn-sm"
                                style="margin: 0px">Meet Our CEO</a>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-sm-2">
                        <img src="{{ asset('img/about-us/newmark-team.jpg') }}" class="img-fluid rounded-start"
                            alt="Who we are">
                    </div>
                </div>
                <div class="bottom-stripe"></div>
            </div>
        </div>
    </div>

    <div class="our-practice-area-graph" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-capitalize main pt-5 mb-4">Our Practice Areas</h2>
                </div>
                <div class="col-md-12">
                    <div class="img-practice-area-img-wrapper">
                        <img src="{{ asset('img/practice-area-graph.png') }}" alt="Our Practice Areas">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container module carousel-module module-5 our-expertise-new" data-aos="fade-up" data-id="module-carousel-5">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h2 class="text-capitalize main">EXPERTISE</h2>
            </div>
        </div>
        <div class="mt-3 ">
            <div class="dots dots-33"></div>
            <div class="carousel ">
                @foreach ($expertises as $expertise)
                    <div class="carousel-block ">
                        <div class="left background-cover"
                            @if ($expertise->image) style='background-image: url("{{ $expertise->image->getUrl() }}");' @endif>
                        </div>
                        <div class="right padding-right">
                            <h3 class="margin-bottom-half text-capitalize">{{ $expertise->title ?? '' }} <small></small>
                            </h3>
                            <p>
                                {!! $expertise->description !!}
                            </p>
                            <span class="content-link">
                                <a href="{{ route('expertise', $expertise->slug) }}">
                                    Learn More <i class="fa fa-chevron-right"></i>
                                </a>
                            </span>
                        </div>
                        <div class="clear"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="our-partner-network">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-capitalize main pt-5 mb-4">Our Partner Network</h2>
                </div>
            </div>
            <div class="row logos">
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/1.jpg') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/2.png') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/3.jpg') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/4.png') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/5.jpg') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/6.png') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/7.jpg') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/8.png') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/9.jpg') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/10.png') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/11.png') }}" class="img-fluid" alt="Partners Network">
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#">
                        <img src="{{ asset('img/partners/12.png') }}" class="img-fluid bg-dark" alt="Partners Network">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-white" data-aos="fade-up">
        <div class="our-philosophy">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-capitalize main pt-5 mb-4">Our Sustainability philosophy: The Tripple Bottom Line</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <img src="{{ asset('img/philosophy.png') }}"
                        alt="Our Sustainability philosophy: The Tripple Bottom Line" height="200">
                </div>
                <div class="col-md-4">
                    <div class="we-connect-bg card">
                        <h5 class="card-title">People</h5>
                        <p class="card-text">
                            At Newmark, we are committed to empowering our team members to become the best possible version
                            of themselves and support them to achieve their life aspirations, not only in their careers but
                            also in society.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-color-darker card">
                        <h5 class="card-title">Planet</h5>
                        <p class="card-text">
                            As Newmark, we try to reduce our ecological footprint as much as possible, while advocating for
                            environmental conservation in our business ecosystem.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-color-background card">
                        <h5 class="card-title">Profit</h5>
                        <p class="card-text">
                            As such, we strive to create value in Society by creating more employment and supporting more
                            clients to become a Force for Good in the community. This is why are committed to business
                            growth and sustainability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
