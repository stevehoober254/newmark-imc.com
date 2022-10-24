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
                                        <li class="breadcrumb-item"><a href="/"><i class="fas fa-home mr-2"></i>
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
    <div class="p-3 mt-3" data-aos="fade-up">
        <div class="our-business mb-3">
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
                        <img src="{{ asset('img/homepage/2.jpg') }}" class="img-fluid rounded-start" alt="Who we are">
                    </div>
                </div>
                <div class="bottom-stripe"></div>
            </div>
        </div>
    </div>
@endsection
