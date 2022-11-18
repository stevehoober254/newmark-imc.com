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
                            <h3>SOCIAL MEDIA & INFLUENCER MANAGEMENT</h3>
                            <h5>Connect with your tribe</h5>
                        </div>
                    </div>
                    <div class="col">
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
                                    <img src="https://images.unsplash.com/photo-1666249245722-0a122db51a00?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2230&q=80"
                                        alt="SOCIAL MEDIA & INFLUENCER MANAGEMENT">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($slug == 'newmark-pr')

            @elseif ($slug == 'newmark-experiential')

            @elseif ($slug == 'newmark-imc')

            @elseif ($slug == 'newmark-creative')

            @elseif ($slug == 'newmark-creative')
            @endif
        </div>
    </div>
    @if (count($ourExpertise->client_logos) > 0)
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
                                <img src="{{ $media->getUrl() }}" class="img-fluid" alt="{{ $ourExpertise->title ?? '' }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    {{-- @if ($slug == 'newmark-digital')
    @elseif ($slug == 'newmark-pr')

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
        @elseif ($slug == 'newmark-pr')

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
                            <div class="col-md-6 center-item-vertically bg-2">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/novar.png') }}" alt="Client Logo">
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
                                    <img src="{{ asset('img/client-logos/novar.png') }}" alt="Client Logo">
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
                            <div class="col-md-6 center-item-vertically bg-2">
                                <div class="case-study-client-logo">
                                    <img src="{{ asset('img/client-logos/novar.png') }}" alt="Client Logo">
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
            @elseif ($slug == 'newmark-pr')

            @elseif ($slug == 'newmark-experiential')

            @elseif ($slug == 'newmark-imc')

            @elseif ($slug == 'newmark-creative')

            @elseif ($slug == 'newmark-creative')
            @endif
        </div>
    </div>
@endsection
