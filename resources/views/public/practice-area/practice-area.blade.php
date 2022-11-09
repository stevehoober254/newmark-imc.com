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
                                <img src="{{ asset('img/newmark-logo.png') }}" alt="">
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
    <div class="container mt-4" data-aos="fade-up">
        <div class="practice-area-services">
            <div class="row">
                <div class="col-lg-12 text-center mb-1 mt-4">
                    <h2 class="text-capitalize"><span>our services</span></h2>
                </div>
            </div>
            <div class="row practice-area-service-details text-white box-shadow">
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
            <div class="row practice-area-service-details mt-5 text-white box-shadow">
                <div class="col-md-7">
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
                                <img src="https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                    alt="SOCIAL MEDIA & INFLUENCER MANAGEMENT">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 center-item-vertically bg-main">
                    <div class="service-heading">
                        <h3>CONTENT MARKETING AND SEARCH ENGINE OPTIMIZATION</h3>
                        <h5>Expand your tribe</h5>
                    </div>
                </div>
            </div>
            <div class="row practice-area-service-details mt-5 text-white box-shadow">
                <div class="col-md-5 center-item-vertically bg-main">
                    <div class="service-heading">
                        <h3>SOCIAL MEDIA MANAGEMENT</h3>
                        <h5>Connect with your tribe</h5>
                    </div>
                </div>
                <div class="col-md-7">
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
                                <img src="https://images.pexels.com/photos/270637/pexels-photo-270637.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                    alt="SOCIAL MEDIA & INFLUENCER MANAGEMENT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="company-we-keep pb-4">
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
                        <img src="../img/client-logos/1.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.gatesfoundation.org/" target="_blank">
                        <img src="{{ asset('img/client-logos/bill-melinda.svg') }}" class="img-fluid" alt=""></a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/3.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/4.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/5.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/6.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/7.jpg" class="img-fluid" alt="">
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
                        <img src="../img/client-logos/8.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/9.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/10.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/11.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/12.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/13.png" class="img-fluid" alt="">
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
                        <img src="../img/client-logos/30.png" class="img-fluid" alt="">
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
                        <img src="../img/client-logos/16.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/17.jpg" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/18.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/19.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/20.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <img src="../img/client-logos/21.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                    <a href="https://garid-accra.com/" target="_blank">
                        <img src="{{ asset('img/client-logos/logo-GARID-01.png') }}" class="img-fluid" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- testimonies --}}
    <div class="container mt-3 testimonials" data-aos="fade-up">
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
                        We selected Newmark Group as one of the partners who provided Event Management services during the
                        2nd ACCA, which gathered more than 500 participants from all over the world.
                    </p>
                    <p>
                        We appreciate Newmark’s professionalism, personalised attention to detail, flexibility and creative
                        approach to making our events a success. We highly recommend this accomplished team.
                    </p>
                </div>
                <div class="testimony-author">
                    <img src="https://www.act-africa.org/image/logo_act.png" alt="African Conservation Tillage Network">
                </div>
            </div>
            <div class="testimony-card">
                <i class="fa fa-quote-left"></i>
                <div class="testimony-desc">
                    <p>
                        I would like to formally acknowledge and endorse Newmark Group Limited as an outstanding media
                        relations, communications and event management partner for the November 2020 AACOSE (Annual Africa
                        Conference on Social Entrepreneurship), a first of its kind hybrid conference that was hosted by the
                        Tangaza University College and us, Ashoka EA.
                    </p>
                    <p>
                        We had a very strong traditional and online media presence and coverage appearing in tier one Kenyan
                        TV and print outlets.
                        Newmark Group Limited managed all aspects of the launch from beginning to the end, which resulted in
                        an unequivocal success not only for our organization but for the community at large.
                    </p>
                </div>
                <div class="testimony-author">
                    <img src="https://www.ashoka.org/themes/custom/blanco_ashoka_org/logo.svg" alt="Ashoka EA">
                </div>
            </div>
        </div>
    </div>
    {{-- case studies --}}
    <div class="container mt-3 case-studies" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-1">
                <h2 class="text-capitalize">Case studies</h2>
            </div>
        </div>
        <div class="case-studies-carousel card">
            <div class="row case-studies-card g-0 display-flex">
                <div class="col-md-5">
                    <div class="row g-0">
                        <div class="col-md-6 center-item-vertically bg-2">
                            <div class="case-study-client-logo">
                                <img src="{{ asset('img/client-logos/novar.png') }}" alt="Client Logo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="case-study-client-imgs">
                                <img src="{{ asset('img/newmark-digital/6.png') }}" alt="Client">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="case-study-client-imgs">
                                <img src="{{ asset('img/newmark-digital/5.jpg') }}" alt="Client">
                            </div>
                        </div>
                        <div class="col-md-6 center-item-vertically bg-1">
                            <div class="case-study-client-region ">
                                <h3>Region: <span>Ghana</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 bg-3 text-white">
                    <div class="case-study-description">
                        <div class="ambition">
                            <h5>Ambition</h5>
                            <p>
                                Novartis, an Internationally acclaimed global healthcare company needed to officially launch
                                the
                                first licensed therapy for sickle cell disease (SCD) in Ghana in the form of a
                                public-private
                                partnership event. This was to be done in collaboration with the Government of Ghana, the
                                Sickle
                                Cell Foundation of Ghana. The event was attended by the Global CEO of Novartis and the Vice
                                President of the Republic of Ghana
                            </p>
                        </div>
                        <div class="action">
                            <h5>Action</h5>
                            <p>
                                Newmark’s strategic approach involved mapping all stakeholders and key media influencers for
                                meetings and briefing on the partnership. An integrated, multi-platform communication
                                approach
                                was deployed, combining owned and earned media as the core pillars of the event
                                mobilization.
                            </p>
                        </div>
                        <div class="results">
                            <h5>Results</h5>
                            <ul>
                                <li>The event was organized seamlessly with over six-hundred people attending. </li>
                                <li>Traditional media coverage has been massive across the region. </li>
                                <li>The narratives around the project got very sound approvals.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row case-studies-card g-0 display-flex">
                <div class="col-md-5">
                    <div class="row g-0">
                        <div class="col-md-6 center-item-vertically bg-2">
                            <div class="case-study-client-logo">
                                <img src="{{ asset('img/client-logos/novar.png') }}" alt="Client Logo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="case-study-client-imgs">
                                <img src="{{ asset('img/newmark-digital/6.png') }}" alt="Client">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="case-study-client-imgs">
                                <img src="{{ asset('img/newmark-digital/5.jpg') }}" alt="Client">
                            </div>
                        </div>
                        <div class="col-md-6 center-item-vertically bg-1">
                            <div class="case-study-client-region ">
                                <h3>Region: <span>Kenya</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 bg-3 text-white">
                    <div class="case-study-description">
                        <div class="ambition">
                            <h5>Ambition</h5>
                            <p>
                                The Rockefeller Foundation Africa Regional Office needed to organise an inclusive economies
                                forum for Africa which would attract senior decision-makers and thinkers from across
                                Private, Public and Development sectors to interrogate the theme.
                            </p>
                        </div>
                        <div class="action">
                            <h5>Action</h5>
                            <p>
                                For this Africa-focused event, Newmark was tasked with providing support the ARO office over
                                a period of 4 months to design and execute communications, media and event management
                                strategies that would yield high participation, quality debates and value.
                            </p>
                        </div>
                        <div class="results">
                            <h5>Results</h5>
                            <ul>
                                <li>The event was organized seamlessly with over six-hundred people attending. </li>
                                <li>Traditional media coverage has been massive across the region. </li>
                                <li>The narratives around the project got very sound approvals.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
