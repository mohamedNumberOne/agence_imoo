<div class="sub-header ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="info">
                    <li>
                        <span class="icone"> <i class="fa fa-envelope"></i> </span>
                        @foreach ($info_company as $info)
                            {{ $info->company_email }}
                        @endforeach
                    </li>
                    <li>
                        <span class="icone"> <i class="fa fa-map"></i> </span>
                        @foreach ($info_company as $info)
                            {{ $info->company_adresse }}
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <ul class="social-links">
                    <li><a href="{{ $info->fb_link }}"><i class="fab fa-facebook"></i></a></li>

                    <li><a href="{{ $info->tiktok_link }}"><i class="fa-brands fa-tiktok"></i></a></li>
                    <li><a href="{{ $info->insta_link }}"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Strt ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <h1>Villa</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    {{-- wire:navigate --}}
                    <ul class="nav">
                        <li><a href="/"   wire:navigate> Accueil </a></li>
                        <li><a href="{{ route('nos_immobiliers_page') }}" wire:navigate>
                                Nos immobiliers
                            </a>
                        </li>
                        {{-- <li><a href=" {{ route('property-details') }} ">Property Details</a></li> --}}
                        <li><a  wire:navigate  href="{{route('contact_us_page')}}" >
                            Contact
                        </a></li>
                        
                        <li>
                            <a href="{{ route('contact_us_page') }}"> <span class="icone"> <i class="fa fa-calendar"></i> </span>
                                Prendre un RDV
                            </a>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
