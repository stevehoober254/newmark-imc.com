@extends('layouts.public')
@section('title')
    Career - {{ $opportunity->job_title ?? '' }}
@endsection
@section('content')
    <div class="newmark-careers">
        <div class="careers-top-header" style="background-image: url('{{ asset('img/top-bg.png') }}')">
            <div class="careers-bg">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-md-6 pb-5">
                            <h1>
                                {{ $opportunity->job_title ?? '' }}
                            </h1>
                            <p>
                                {{ $opportunity->job_purpose ?? '' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="thick module-2 bright-red-background" data-aos="fade-right" data-id="module-solid_line-2" id="content-2" />

        <div class="container job-details mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="job-details-widget-side pr-20">
                        <div class="job-details-widget">
                            <h3 class="title">Job Overview</h3>
                            <div class="bar"></div>
                            <ul class="job-details-category text-capitalize">
                                <li>Job title: <span>{{ $opportunity->job_title ?? '' }}</span></li>
                                <li>Job Type: <span>{{ $opportunity->category ?? '' }}</span></li>
                                <li>Practice area: <span>{{ $opportunity->expertise_area->title ?? '' }}</span></li>
                                <li>Reporting to: <span>{{ $opportunity->reporting_to ?? '' }}</span></li>
                                <li>Location: <span>{{ $opportunity->location->name ?? '' }}</span></li>
                                <li>Job purpose: <span>{{ Str::limit($opportunity->job_purpose, 20, '...') ?? '' }}</span>
                                </li>
                                <li>Published On: <span
                                        class="text-lowercase">{{ $opportunity->created_at->diffForHumans() ?? '' }}</span>
                                </li>
                                <li>Application Due: <span>-</span></li>
                            </ul>
                            <div class="job-details-social">
                                <span>Share Post:</span>
                                <ul class="social-icon">
                                    <li>
                                        <a href="https://www.facebook.com/sharer.php?{{ $opportunity->job_title }} Job at {{ url()->current() }}"
                                            target="_blank">
                                            <i class="fab fa-fw fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text={{ url()->current() }}" target="_blank">
                                            <i class="fab fa-fw fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text={{ $opportunity->job_title }} Job at {{ url()->current() }}"
                                            target="_blank">
                                            <i class="fab fa-fw fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}"
                                            target="_blank">
                                            <i class="fab fa-fw fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="job-details-content">
                        <div class="content mb-30">
                            {{-- <h3>Job Description</h3>
                            <div class="bar"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim a erat sit vulputate
                                elementum orci.
                                Risus nec viverra ornare venenatis proin ac varius tristique ut. Vitae egestas tellus amet
                                nulla cursus.ands
                                Pellentesque placerat maecenas egestas ullamcorper sed nunc. Vitae egestas tellus amet nulla
                                something loss
                                Pellentesque placerat maecenas egestas ullamcorper sed nunc.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim a erat sit vulputate
                                elementum orci.
                                Risus nec viverra ornare venenatis proin ac varius tristique ut. Vitae egestas tellus amet
                                nulla cursus in
                                that. Pellentesque placerat maecenas egestas ullamcorper sed sarinto.</p>
                        </div> --}}
                            <div class="job-details-list">
                                <h3>Key Responsibilities</h3>
                                <div class="bar"></div>
                                <ul>
                                    {!! $opportunity->key_responsibility ?? '' !!}
                                </ul>
                            </div>
                            <div class="job-details-list">
                                <h3>Qualifications</h3>
                                <div class="bar"></div>
                                <ul>
                                    {!! $opportunity->qualification ?? '' !!}
                                </ul>
                            </div>
                            <div class="job-details-list">
                                <h3>Qualifications</h3>
                                <div class="bar"></div>
                                <ul>
                                    {!! $opportunity->how_to_apply ?? '' !!}
                                </ul>
                            </div>
                            <div class="article-social-icon">
                                <ul class="social-icon">
                                    <li class="title">Share Post</li>
                                    <li>
                                        <a href="https://www.facebook.com/sharer.php?{{ $opportunity->job_title }} Job at {{ url()->current() }}"
                                            target="_blank">
                                            <i class="fab fa-fw fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="whatsapp://send?text={{ url()->current() }}" target="_blank">
                                            <i class="fab fa-fw fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text={{ $opportunity->job_title }} Job at {{ url()->current() }}"
                                            target="_blank">
                                            <i class="fab fa-fw fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}"
                                            target="_blank">
                                            <i class="fab fa-fw fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
