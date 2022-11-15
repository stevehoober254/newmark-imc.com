@extends('layouts.public')
@section('content')
    <div class="newmark-careers">
        <div class="careers-top-header" style="background-image: url('{{ asset('img/top-bg.png') }}')">
            <div class="careers-bg">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-md-6 pb-5">
                            <h1>
                                Find The Job That Fits Your Career
                            </h1>
                            <p>
                                Search or view our top Jobs here at Newmark
                            </p>
                            <form class="search-job mt-5">
                                <div class="row justify-content-center justify-content-md-between g-0">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Job title or Keywords"
                                            name="query">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary text-capitalize search-btn" type="submit">find
                                            jobs</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="thick module-2 bright-red-background" data-aos="fade-right" data-id="module-solid_line-2"
            id="content-2" />
        <div class="job-category mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="main-color headings pb-4 text-uppercase">Popular Jobs by EXPERTISE areas</h2>
                    </div>
                    @forelse ($ourExpertises as $ourExpertise)
                        <div class="col-md-4 text-center">
                            <a href="#">
                                <div class="practice-area-job-category"
                                    @if ($ourExpertise->image) style='background-image: url("{{ $ourExpertise->image->getUrl() }}");' @endif>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title text-capitalize">{{ $ourExpertise->title ?? '' }}</h5>
                                            <p class="card-text text-white mt-3">{{ $ourExpertise->opportunities() }} Open
                                                Position</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-md-12 text-center">
                            <h3 class="text-danger">No available Expertise Positions Found</h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="job-lists">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="main-color headings pb-4 text-uppercase">Popular Jobs list</h2>
                    </div>
                    @forelse ($opportunities as $opportunity)
                        <div class="col-md-12 job-list-card">
                            <a href="{{ route('job.details', $opportunity->slug) }}">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        @if ($opportunity->expertise_area->expertise_logo)
                                                            <img src="{{ $opportunity->expertise_area->expertise_logo->getUrl() }}"
                                                                alt="{{ $opportunity->expertise_area->title ?? '' }}">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="job-content">
                                                            <h5><span
                                                                    class="badge-info">{{ App\Models\Opportunity::CATEGORY_SELECT[$opportunity->category] ?? '' }}</span>
                                                            </h5>
                                                            <h3 class="text-capitalize">{{ $opportunity->job_title ?? '' }}
                                                            </h3>
                                                            <div class="row g-0 text-dark-light location-time">
                                                                <div class="col-md-3">
                                                                    <i class="fa fa-map-marker-alt"></i>
                                                                    {{ $opportunity->location->name ?? '' }}
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <i class="fa fa-clock"></i>
                                                                    {{ $opportunity->created_at->diffForHumans() ?? '' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-primary text-capitalize">browse job</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <p class="text-center text-danger">No Opportunities Found at the moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
