@extends('layouts.public')
@section('content')
    <div class="practice-area-top-header"
        style="background-image: url('https://images.pexels.com/photos/443383/pexels-photo-443383.jpeg?auto=compress&cs=tinysrgb&w=1600');">
        <div class="bg-fade-half">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase padding-center">About Newmark IMC</h2>
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
                                        <li class="breadcrumb-item active"><span>About us</span></li>
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
                            <p class="card-text mt-3">
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
    <div class="container mt-1" data-aos="fade-up">
        <div class="our-ceo mb-3">
            <div class="">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/gilbert.jpg') }}" title="Gilbert" class="img-fluid rounded-start"
                            alt="Who we are">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-white">
                            <h5 class="card-title text-transfom-none headings">Trail-blazing leadership</h5>
                            <p class="card-text">
                                Gilbert is a brand Leadership, PR and Strategic Communications expert with a passion for
                                helping brands grow their influence and impact in the community and markets that they serve,
                                with an added advantage of Multilingual Communications/Localization expertise.
                            </p>
                            <p class="card-text">
                                Through the Newmark Group which he co-founded in 2010 and steadily built it to become one of
                                Africa’s fastest-growing independent strategy, brand and communications consultancies, he
                                works with Fortune 500 brands such as Johnson & Johnson, General Electric, Pfizer, Absa Bank
                                Group PLC and AstraZeneca as an influence strategist, communications strategist, media
                                trainer and brand architect.
                            </p>
                            <p class="card-text">
                                His consultancy portfolio spans a wide spectrum of sectors, and includes a strong body of
                                work with entities such as United Nations agencies (UNON, FAO, WHO), Intergovernmental
                                organizations such as the African Union, as well as Development Finance Institutions (DFIs)
                                such as the African Development Bank, the Rockefeller Foundation, the International Monetary
                                Fund, and the World Bank. He also builds and leads teams that have served and continue to
                                support public sector brands such as the Governments of Japan, France and Dubai.
                            </p>
                            <p class="card-text">
                                Out of the 33 countries that the Newmark Group covers in Africa, he has lead assignments in
                                25 nations, leveraging his command of multiple African languages to analyze stakeholder
                                needs and generate locally-relevant insights and actionable strategies. Building on this
                                solid footing, he has developed a series of conceptual frameworks that leverage data,
                                sociology, neuroscience, media consumption trends, technology and marketing best-practice to
                                generate strategies that brands and leadership teams can build on to expand their influence,
                                relevance and competitiveness.
                            </p>
                            <p class="card-text">
                                In line with his bias for innovation through technology, Gilbert is also the co-founded of
                                Weza-Prosoft, a software development and outsourcing company serving clients across the
                                globe from its’ offices in Kenya, Ghana and Canada. He is an alumna of Cornell University
                                (US) and the University of Cumbria (UK).
                            </p>
                        </div>
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
