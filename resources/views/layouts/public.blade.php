<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="" />
    <meta name="description"
        content="The Newmark Group Limited is a leading African Integrated Marketing Communications(IMC) firm that ranks among the fastest growing with a strong presence in the Multinational Brand segment of the market." />
    <meta name="author" content="Newmark IMC" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Newmark IMC
    </title>
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon" type="image" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>
    <!-- preloader -->
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

    @include('partials.footer')

    {{-- whatsapp icon --}}
    <a href="#"
        onclick="window.open('https://web.whatsapp.com/send?phone=254740386468&amp;text=Welcome%20to%20newmrk-imc.com&quot;');return false;"
        class="whatsapp" style="color:#fff" target="_parent">
        <i class="fab fa-whatsapp"></i>
        WhatsApp us
    </a>
    {{-- scripts --}}
    <script type='text/javascript' src='{{ asset('js/jquery.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/bootstrap.bundle.min.js')}}'></script>
    <script type='text/javascript' src='{{ asset('js/select2.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/mobile-detect.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/fontawesome.js') }}'></script>
    <script type='text/javascript' src="{{ asset('js/navigation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js')}}"></script>
    <script type='text/javascript' src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
