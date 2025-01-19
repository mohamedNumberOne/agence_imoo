<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agence Immobiliére</title>
    {{-- bootstrap --}}
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-villa-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <style>
        .footer {
            min-height: 100px;
            display: flex ;
            justify-content: space-between ;
            align-items: center;
            flex-wrap: wrap ;
            padding: 10px;
        }
        .div_footer {
            margin: 7px  ;
        }
    </style>
    @livewireStyles
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @yield('css')
</head>

<body>


    @include('components.user_navigation')


    @yield('content')

    <footer>
        <div class="container text-white   footer ">
            @foreach ($info_company as $info)

            <div class="div_footer"  >
                <img src="{{ asset('assets/images/phone-icon.png') }}" alt="img" style="width:50px">
                {{ $info-> company_tlf2 }} - {{ $info-> company_tlf1 }}
            </div>
            <div class="div_footer">
                <img src="{{ asset('assets/images/email-icon.png') }}" alt="img" style="width:50px"> 
                {{ $info-> company_email }}
            </div>
            @endforeach
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @livewireScripts

    @yield('js')
</body>

</html>