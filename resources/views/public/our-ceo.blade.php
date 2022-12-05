@extends('layouts.public')
@section('title')
    Our CEO
@endsection
@section('content')
    <div class="practice-area-top-header"
        style="background-image: url(https://images.pexels.com/photos/891059/pexels-photo-891059.jpeg?auto=compress&cs=tinysrgb&w=1600);">
        <div class="bg-fade-half">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase padding-center">Meet our ceo</h1>
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
                                        <li class="breadcrumb-item active"><span>Our CEO</span></li>
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
    <div class="container mt-4 bg-white" data-aos="fade-up">
        <div class="our-business mb-3">
            <div class="row g-0">
                <div class="col-md-6 order-sm-1 order-2 center-item-vertically">
                    <div class="card-body">
                        <h5 class="card-title text-transfom-none headings">
                            Why we exist
                        </h5>
                        <p class="card-text mt-3">
                            The Newmark Group is helping to build a world which provides inclusive prosperity for all.
                            To do this, we have built a team that consistently delivers mission-critical insights,
                            strategies, storytelling and execution, through our Strategic Communication and Consulting
                            solutions
                        </p>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-sm-2">
                    <img src="https://images.pexels.com/photos/443383/pexels-photo-443383.jpeg?auto=compress&cs=tinysrgb&w=1600"
                        class="img-fluid rounded-start" alt="Why we exist">
                </div>
            </div>
            <div class="bottom-stripe"></div>
        </div>
    </div>
    <div class="container mt-5" data-aos="fade-up">
        <div class="our-ceo mb-3">
            <div class="">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('img/gilbert.jpg') }}" title="Gilbert" class="img-fluid rounded-start"
                            alt="Trail-blazing leadership">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-white">
                            <h5 class="card-title text-transfom-none headings">Trail-blazing leadership</h5>
                            <p class="card-text">
                                Gilbert is a brand Leadership, PR and Strategic Communications expert with a passion for
                                helping brands grow their influence and impact in the community and markets that they
                                serve,
                                with an added advantage of Multilingual Communications/Localization expertise.
                            </p>
                            <p class="card-text">
                                Through the Newmark Group which he co-founded in 2010 and steadily built it to become
                                one of
                                Africa’s fastest-growing independent strategy, brand and communications consultancies,
                                he
                                works with Fortune 500 brands such as Johnson & Johnson, General Electric, Pfizer, Absa
                                Bank
                                Group PLC and AstraZeneca as an influence strategist, communications strategist, media
                                trainer and brand architect.
                            </p>
                            <p class="card-text">
                                His consultancy portfolio spans a wide spectrum of sectors, and includes a strong body
                                of
                                work with entities such as United Nations agencies (UNON, FAO, WHO), Intergovernmental
                                organizations such as the African Union, as well as Development Finance Institutions
                                (DFIs)
                                such as the African Development Bank, the Rockefeller Foundation, the International
                                Monetary
                                Fund, and the World Bank. He also builds and leads teams that have served and continue
                                to
                                support public sector brands such as the Governments of Japan, France and Dubai.
                            </p>
                            <p class="card-text">
                                Out of the 33 countries that the Newmark Group covers in Africa, he has lead assignments
                                in
                                25 nations, leveraging his command of multiple African languages to analyze stakeholder
                                needs and generate locally-relevant insights and actionable strategies. Building on this
                                solid footing, he has developed a series of conceptual frameworks that leverage data,
                                sociology, neuroscience, media consumption trends, technology and marketing
                                best-practice to
                                generate strategies that brands and leadership teams can build on to expand their
                                influence,
                                relevance and competitiveness.
                            </p>
                            <p class="card-text">
                                In line with his bias for innovation through technology, Gilbert is also the co-founded
                                of
                                Weza-Prosoft, a software development and outsourcing company serving clients across the
                                globe from its’ offices in Kenya, Ghana and Canada. He is an alumna of Cornell
                                University
                                (US) and the University of Cumbria (UK).
                            </p>
                        </div>
                    </div>

                </div>
                <div class="bottom-stripe"></div>
            </div>
        </div>
    </div>
    <div class="container mt-5 practice-areas mb-5" data-aos="fade-up">
        <div class="practice-area-containers our-ceo-containers">
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="{{ asset('img/absa.jpg') }}" alt="Executive Influence Coach" />
                            <figcaption>
                                <h2>Executive Influence Coach</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="{{ asset('img/host.jpg') }}" alt="Global Event Host and Moderator" />
                            <figcaption>
                                <h2>Global Event Host and Moderator</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="{{ asset('img/cs.jpg') }}" alt="Convening Architect and Strategist" />
                            <figcaption>
                                <h2>Convening Architect and Strategist</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="{{ asset('img/fingreen.jpg') }}" alt="Sustainability and Social Impact advocate" />
                            <figcaption>
                                <h2>Sustainability and Social Impact advocate</h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="{{ asset('img/bongo.jpg') }}" alt="Communications strategist" />
                            <figcaption>
                                <h2>
                                    Communications strategist
                                </h2>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="#">
                        <figure class="practice-area-description">
                            <img src="{{ asset('img/ntv.jpg') }}" alt="Entrepreneur" />
                            <figcaption>
                                <h2>
                                    Entrepreneur
                                </h2>
                            </figcaption>
                        </figure>
                    </a>
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
                    <a href="#">
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
    </div>
@endsection
