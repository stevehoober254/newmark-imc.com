@extends('layouts.public')
@section('title')
    {{ $insight->title }}
@endsection
@section('content')
    <div class="practice-area-top-header"
        @if ($insight->image) style="background-image: url({{ $insight->image->getUrl() }});" @endif>
        <div class="bg-fade-half">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-uppercase padding-center mb-5 mt-5">{{ $insight->title }}</h1>
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
                                        <li class="breadcrumb-item active"><a href="{{ route('insights') }}"
                                                class="text-white"><span>Insights</span></a></li>
                                        <li class="breadcrumb-item active"><span>{{ $insight->title }}</span></li>
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
    <div class="container mt-5 mb-4 insights-details">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {!! $insight->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
