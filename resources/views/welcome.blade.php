@extends('layouts_user.template')



@section('content')
    @if (session()->has('msg'))
        <div class="alert alert-success container text-center m-auto mb-5" role="alert">
            {{ session('msg') }}
        </div>
    @endif

    <div id="carouselExampleCaptions" class="carousel slide ">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/Sans-titre-2.png') }}" class="d-block w-100" alt="image">
                <div class="carousel-caption d-none d-md-block">
                    <h3> Satisfaction </h3>
                    <p>La satisfaction de nos clients est garantie.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Sans-titre-3.png') }}" class="d-block w-100" alt="image">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Confiance </h3>
                    <p>Faites-nous confiance pour vos projets immobiliers.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/Sans-titre-1.png') }}" class="d-block w-100" alt="image">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Rapidité </h3>
                    <p>Un service rapide pour vos transactions immobilières.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    @if (count($ajout_recent) > 0)
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

                                <a href="{{ route('details_immo', $immo->rs_id) }}">
                                    <div
                                        style="height: 200px; width:  100% ; 
                        background-image: url({{ asset($immo->photo_principale) }}) ; background-size : cover ; background-repeat : no-repeat ;background-position :center ;">
                                    </div>
                                </a>
                                <span class="category"> {{ $immo->titre_bien }} </span>
                                <h6> {{ $immo->prix }} </h6>
                                <hr>
                                <span class="category mb-4">
                                    <i class="fa-solid fa-handshake"></i> {{ $immo->transaction }}
                                </span>
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
                                    <a href="{{ route('details_immo', $immo->rs_id) }}"> {{ $immo->wilaya_name }} |
                                        {{ $immo->daira_name }},
                                        {{ $immo->adresse }}
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
                                    <a href="{{ route('details_immo', $immo->rs_id) }}">visiter</a>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif


    <div class="div_img mt-5">
        <h2 class="text-white"><i class="fa-solid fa-key"></i> Découvrez les meilleures propriétés Adaptées à vos besoins
            et envies.</h2>
    </div>



    <div class="video section mt_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| chez nous </h6>
                        <h2> Les meilleurs choix sont disponibles chez nous selon vos goûts.</h2>
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
                        <img src="{{ asset('assets/images/video-frame.jpg') }}" alt="image">

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
                                    <p class="count-text ">Numéro 1 <br> Dans l'immobilier </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="12" data-speed="1000">12</h2>
                                    <p class="count-text ">Ans<br>D'Experience</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">

                                    <p class="count-text ">Dans le marché<br>Depuis 2020 </p>
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
                        <h6>| meilleure offre</h6>
                        <h2> Trouvez votre meilleure offre dès maintenant!</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="appartment" role="tabpanel"
                                    aria-labelledby="appartment-tab">
                                    <div class="row">

                                        <div class="col-lg-7">
                                            <img src="{{ asset('assets/images/deal-01.jpg') }}" alt="">
                                        </div>
                                        <div class="col-lg-4">
                                            <h3 class="mb-3">Votre partenaire immobilier partout en Algérie </h3>

                                            <p>
                                                Nous vous proposons une vaste sélection de biens immobiliers adaptés à tous
                                                vos besoins, disponibles dans les 58 wilayas du territoire national.
                                                <br>
                                                Que
                                                vous soyez à la recherche d'une maison, d'un appartement, ou d'un terrain,
                                                nous mettons tout en œuvre pour vous offrir des solutions sur mesure. <br>

                                                Notre priorité est de répondre à vos attentes en tenant compte de vos goûts
                                                et de votre budget.
                                                <br>
                                                Avec notre expertise et notre engagement, nous vous
                                                garantissons un service de qualité et une expérience d'achat ou de location
                                                en toute sérénité.
                                            </p>

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
                                <img src="{{ asset('assets/images/phone-icon.png') }}" alt=""
                                    style="max-width: 52px;" class="mb-5">
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
                                <img src="{{ asset('assets/images/email-icon.png') }}" alt=""
                                    style="max-width: 52px;">
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
                                    <input type="text" name="name" id="name" placeholder="Votre nom complet"
                                        required>
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
