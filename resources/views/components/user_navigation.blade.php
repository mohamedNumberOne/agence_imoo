<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="info">
                    <li><i class="fa fa-envelope"></i>
                        @foreach ($info_company as $info)
                        {{ $info -> company_email }}
                        @endforeach
                    </li>
                    <li>
                        <i class="fa fa-map"></i>
                        @foreach ($info_company as $info)
                        {{ $info ->company_adresse }}
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
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
                    <a href="index.html" class="logo">
                        <h1>Villa</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    {{-- wire:navigate --}}
                    <ul class="nav">
                        <li><a href="/" class="active" wire:navigate> Accueil </a></li>
                        <li><a href="{{ route('nos_immobiliers_page') }}" wire:navigate>
                                Nos immobiliers
                            </a>
                        </li>
                        {{-- <li><a href=" {{ route('property-details') }} ">Property Details</a></li> --}}
                        <li><a href="{{ route('contact_us_page') }}" wire:navigate>Contact</a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
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