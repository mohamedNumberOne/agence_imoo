@extends('layouts_user.template')



@section('content')
<div class="main-banner">
    <div class="owl-carousel owl-banner">
        <div class="item item-1">
            <div class="header-text">
                <span class="category">Toronto, <em>Canada</em></span>
                <h2>Hurry!<br>Get the Best Villa for you</h2>
            </div>
        </div>
        <div class="item item-2">
            <div class="header-text">
                <span class="category">Melbourne, <em>Australia</em></span>
                <h2>Be Quick!<br>Get the best villa in town</h2>
            </div>
        </div>
        <div class="item item-3">
            <div class="header-text">
                <span class="category">Miami, <em>South Florida</em></span>
                <h2>Act Now!<br>Get the highest level penthouse</h2>
            </div>
        </div>
    </div>
</div>


<div class="video section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| Video View</h6>
                    <h2>Get Closer View & Different Feeling</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="video-frame">
                    <img src="assets/images/video-frame.jpg" alt="">
                    {{-- <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fun-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                                <p class="count-text ">Buildings<br>Finished Now</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="12" data-speed="1000">12</h2>
                                <p class="count-text ">Years<br>Experience</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                                <p class="count-text ">Awwards<br>Won 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section best-deal">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>| Best Deal</h6>
                    <h2>Find Your Best Deal Right Now!</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tabs-content">
                    <div class="row">
                        <div class="nav-wrapper ">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab"
                                        data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment"
                                        aria-selected="true">Appartment</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa"
                                        type="button" role="tab" aria-controls="villa" aria-selected="false">Villa
                                        House</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab"
                                        data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse"
                                        aria-selected="false">Penthouse</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="appartment" role="tabpanel"
                                aria-labelledby="appartment-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                                <li>Total Flat Space <span>185 m2</span></li>
                                                <li>Floor number <span>26th</span></li>
                                                <li>Number of rooms <span>4</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assets/images/deal-01.jpg" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Extra Info About Property</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod
                                            tempor pack incididunt ut labore et dolore magna aliqua quised ipsum
                                            suspendisse.
                                            <br><br>When you need free CSS templates, you can simply type TemplateMo
                                            in any search engine website. In addition, you can type TemplateMo
                                            Portfolio, TemplateMo One Page Layouts, etc.
                                        </p>
                                        <div class="icon-button">
                                            <a href="{{ route('contact_us_page') }}"> <span class="icone"> <i
                                                        class="fa fa-calendar"></i> </span>
                                                Schedule a visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                                <li>Total Flat Space <span>250 m2</span></li>
                                                <li>Floor number <span>26th</span></li>
                                                <li>Number of rooms <span>5</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assets/images/deal-02.jpg" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Detail Info About Villa</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod
                                            tempor pack incididunt ut labore et dolore magna aliqua quised ipsum
                                            suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper
                                            mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella
                                            venmo after messenger poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                            <a href="property-details.html"><i class="fa fa-calendar"></i>
                                                Schedule a visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                                <li>Total Flat Space <span>320 m2</span></li>
                                                <li>Floor number <span>34th</span></li>
                                                <li>Number of rooms <span>6</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="assets/images/deal-03.jpg" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Extra Info About Penthouse</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod
                                            tempor pack incididunt ut labore et dolore magna aliqua quised ipsum
                                            suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper
                                            mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella
                                            venmo after messenger poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                            <a href="property-details.html"> <i class="fa fa-calendar"></i>
                                                Schedule a visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="properties section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h2> Biens récents </h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($ajout_recent as $immo)

            <div class="col-lg-4 col-md-6">
                <div class="item">
                    {{-- <a href="{{ route('details_immo' , $immo -> id ) }}">
                        <img src="{{ asset( $immo -> photo_principale ) }}" alt="image">
                    </a> --}}
                    <a href="{{ route('details_immo' , $immo -> id ) }}">
                        <div
                            style="height: 200px; width:  100% ; 
                        background-image: url({{ asset(  $immo->photo_principale ) }}) ; background-size : cover ; background-repeat : no-repeat ;background-position :center ;">
                        </div>
                    </a>
                    <span class="category"> {{ $immo-> titre_bien }} </span>
                    <h6> {{$immo -> prix }} </h6>
                    <hr>
                    @switch($immo-> statut)
                    @case('disponible')
                    <span class="badge bg-success"> {{ $immo->statut }} </span>
                    @break

                    @case('réservé')
                    <span class="badge bg-primary"> {{ $immo->statut }} </span>
                    @break

                    @case('loué')
                    <span class="badge bg-danger"> {{ $immo->statut }} </span>
                    @break

                    @case('vendu')
                    <span class="badge bg-warning"> {{ $immo->statut }} </span>
                    @break
                    @endswitch
                    <h4>
                        <a href="{{ route('details_immo' , $immo -> id ) }}"> {{ $immo->wilaya_name }} | {{
                            $immo->daira_name }},
                            {{ $immo -> adresse }}
                        </a>
                    </h4>
                    <ul>

                        @if (!empty($immo->nb_pieces) && $immo->nb_pieces != null)
                        <li>Chambres: <span> {{ $immo->nb_pieces }} </span></li>
                        @endif

                        @if (!empty($immo->Superficie) && $immo->Superficie != null)
                        <li>Superficie: <span>{{ $immo->Superficie }} </span></li>
                        @endif

                        @if (!empty($immo->etage) && $immo->etage != null)
                        <li>étage: <span>{{ $immo->etage }}</span></li>
                        @endif

                    </ul>
                    <div class="main-button">
                        <a href="{{ route('details_immo' , $immo -> id ) }}">visiter</a>
                    </div>
                </div>
            </div>

            @endforeach



        </div>
    </div>
</div>

<div class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| Contacter Nous</h6>
                    <h2>Contactez nos agents</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
                        width="100%" height="500px" frameborder="0"
                        style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
                        allowfullscreen=""></iframe>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="item phone">
                            <img src="{{asset('assets/images/phone-icon.png')}}" alt="" style="max-width: 52px;"
                                class="mb-5">
                            <h6>
                                @foreach ($info_company as $info)
                                {{ $info->company_tlf1 }}
                                @endforeach
                                <br>
                                <span> Numéro de téléphone </span>
                            </h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item email">
                            <img src="{{ asset('assets/images/email-icon.png') }}" alt="" style="max-width: 52px;">
                            <h6>
                                @foreach ($info_company as $info)
                                {{ $info->company_email }}
                                @endforeach
                                <br>
                                <span> Email </span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <form id="contact-form" method="post" action="{{ route('add_message') }}">
                    @method('POST')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="name">Nom & Prénom </label>
                                <input type="text" name="name" id="name" placeholder="Votre nom complet" required>
                            </fieldset>
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="email">Email </label>
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="E-mail @" required="">
                            </fieldset>
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="subject">Sujet</label>
                                <input type="text" name="subject" id="subject" placeholder="Sujet...">
                            </fieldset>
                            @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="tlf">Téléphone</label>
                                <input type="number" name="tlf" id="tlf" placeholder="Téléphone...">
                            </fieldset>
                            @error('tlf')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Votre Message"></textarea>
                            </fieldset>
                            @error('message')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">
                                    Envoyer
                                </button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection