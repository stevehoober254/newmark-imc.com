@extends('layouts.public')
@section('content')
    <div class="practice-area-top-header"
        style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80');">
        <div class="bg-fade-half">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-md-4">
                        <h2 class="text-capitalize padding-center">CREATIVE SERVICES</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white container mt-4" data-aos="fade-up">
        <div class="row pt-2">
            <div class="col-md-12">
                <div class="services-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Publications</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand"
                                type="button" role="tab" aria-controls="brand" aria-selected="false">Brand Identity</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand"
                                type="button" role="tab" aria-controls="brand" aria-selected="false">Stationery</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand"
                                type="button" role="tab" aria-controls="brand" aria-selected="false">Digital
                                Communication</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand"
                                type="button" role="tab" aria-controls="brand" aria-selected="false">Branded items</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand"
                                type="button" role="tab" aria-controls="brand" aria-selected="false">Merchandise
                                Branding</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="brand-tab" data-bs-toggle="tab" data-bs-target="#brand"
                                type="button" role="tab" aria-controls="brand" aria-selected="false">Event Session
                                Materials</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1588200618450-3a5b1d3b9aa5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="brand" role="tabpanel" aria-labelledby="brand-tab">
                <div class="row">
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gallery-wrapper">
                            <a href="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                data-fancybox="group" data-caption="" data-description="description">
                                <img src="https://images.unsplash.com/photo-1519397652863-aad621636ac7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
