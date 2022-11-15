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
    <title>
        Newmark IMC
    </title>
    <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon" type="image" />
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DK8LR6F4FX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DK8LR6F4FX');
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

    @include('partials.footer')

    {{-- whatsapp icon --}}
    <a href="#"
        onclick="window.open('https://web.whatsapp.com/send?phone=254740386468&amp;text=Welcome%20to%20newmrk-imc.com&quot;');return false;"
        class="whatsapp" style="color:#fff" target="_parent">
        <i class="fab fa-whatsapp"></i>
        WhatsApp us
    </a>
    <script src="{{ asset('js/main.min.js') }}"></script>
</body>

</html>
