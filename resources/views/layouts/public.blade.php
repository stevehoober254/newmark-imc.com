<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="Newmark" />
    <meta name="description"
        content="The Newmark Group Limited is a leading African Integrated Marketing Communications(IMC) firm that ranks among the fastest growing with a strong presence in the Multinational Brand segment of the market." />
    <meta name="author" content="Newmark IMC" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @hasSection ('title')
            @yield('title') | Newmark
        @else
           Influence. Impact. Inspire. | Newmark IMC
        @endif
    </title>
    <meta name="title" content="@yield('title')">
    <meta name="description"
        content="The Newmark Group Limited is a leading African Integrated Marketing Communications(IMC) firm that ranks among the fastest growing with a strong presence in the Multinational Brand segment of the market.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() ?? 'https://newmark-imc.com/' }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description"
        content="The Newmark Group Limited is a leading African Integrated Marketing Communications(IMC) firm that ranks among the fastest growing with a strong presence in the Multinational Brand segment of the market.">
    <meta property="og:image" content="{{ asset('img/newmark-logo.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="og:url" content="{{ url()->current() ?? 'https://newmark-imc.com/' }}">
    <meta property="twitter:title" content="@yield('title')">
    <meta property="twitter:description"
        content="The Newmark Group Limited is a leading African Integrated Marketing Communications(IMC) firm that ranks among the fastest growing with a strong presence in the Multinational Brand segment of the market.">
    <meta property="twitter:image" content="{{ asset('img/newmark-logo.png') }}">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon" type="image" />
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leadform.css') }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SPFLH6X85K"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SPFLH6X85K');
    </script>
</head>

<body>
    <div class="loading" id="loading">
        <img src="{{ asset('img/loader.gif') }}" />
    </div>

    @include('partials.navbar')

    <div class="page-content">
        <div class="modules-content">
            <div class="modules">

                @yield('content')

            </div>
        </div>
    </div>
    
     
    @include('partials.leadform')
  

    @include('partials.footer')
    
    
   

    {{-- whatsapp icon --}}
    <a href="#"
        onclick="window.open('https://wa.me/254740507221?text=Hello%20Newmark%20Group%22');return false;"
        class="whatsapp" style="color:#fff" target="_parent">
        <i class="fab fa-whatsapp"></i>
        WhatsApp us
    </a>
    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/leadform.js') }}"></script>
</body>

</html>
