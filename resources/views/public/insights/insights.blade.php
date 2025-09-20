@extends('layouts.public')
@section('title')
    Insights
@endsection
@section('content')
    <div class="practice-area-top-header"
        style="background-image: url(https://images.unsplash.com/photo-1579532536935-619928decd08?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80);">
        <div class="bg-fade-half">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase padding-center mb-5 mt-5">Latest News</h1>
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
                                        <li class="breadcrumb-item active"><span>Insights</span></li>
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
    <div class="container mt-5 insights news-section">
        <div class="row">
            <div class="col-md-7">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">Education</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">Hospitality</button>
                    </li> --}}
                </ul>
            </div>
            <div class="col-md-5">
                <form action="{{ route('insights.search.post') }}" method="POST" class="float-right">
                    @csrf
                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                class="fas fa-search"></i></button>
                        <input type="text" class="form-control" name="search" required placeholder="Search Articles"
                            aria-label="Search" aria-describedby="button-addon2">
                    </div>
                </form>
            </div>
            <div class="col-md-12 mt-4">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="d-flex flex-row flex-wrap">
                            <div class="col-lg-3">
                                    <div class="leadform-trigger cursor-pointer">
                                        <main>
                                            <div class='normal '>
                                                <div class='module'>
                                                    <div class='thumbnail'>
                                                            <img src="{{ asset('img/report.png') }}"
                                                                alt="H1 MEDIA ANALYSIS REPORT 2023">
                                                        <div class='date'>
                                                            <div>
                                                                2023
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='content'>
                                                        <h1 class='title text-primary'>
                                                            MEDIA ANALYSIS REPORT 2023
                                                        </h1>
                                                        <div class="description">
                                                            This comprehensive media analysis report aims to delve into the media consumption habits of four African countries: Ghana, Zambia, Burundi, and the Democratic Republic of Congo (DRC)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </main>
                                    </div>
                                </div>
                            @forelse ($insights as $insight)
                                <div class="col-lg-3">
                                    <a href="{{ route('insight.details', $insight->slug) }}">
                                        <main>
                                            <div class='normal '>
                                                <div class='module'>
                                                    <div class='thumbnail'>
                                                        @if ($insight->image)
                                                            <img src="{{ $insight->image->getUrl() }}"
                                                                alt="{{ $insight->title }}">
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
                            @empty
                                <div class="col-12">
                                    <h3 class="text-center text-danger">No Articles Found!</h3>
                                </div>
                            @endforelse
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    @endsection
