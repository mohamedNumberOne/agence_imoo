@extends('layouts_user.template')

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/owl/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/owl/owl.theme.default.min.css') }}" rel="stylesheet" />

    <style>
        <style>.custom-prev,
        .custom-next {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .custom-prev:hover,
        .custom-next:hover {
            background-color: #2980b9;
        }

        .owl-nav {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 40%;
            width: 100%;
            transform: translateY(-50%);
            pointer-events: none;
            /* Empêche les clics sur la zone nav */

        }

        .owl-nav i {
            font-size: 35px;
            opacity: 0.9;
            padding: 7px;
            border-radius: 50%;
            background-color: #f35525 !important;
            color: white;

        }

        .owl-nav button {
            pointer-events: auto;
            /* Réactive les clics sur les boutons */
        }

        .owl-dots {
            text-align: center;
            margin-top: 20px;

        }
    </style>

    </style>
@endsection

@section('content')


    <div class="single-property section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-image">
                        <img src=" {{ asset($immo->photo_principale) }} " alt="photo_principale">
                    </div>
                    <div class="main-content">
                        <span class="category mb-4"> <i class="fas fa-home"></i> {{ $immo->titre_bien }} </span>
                        <span class="category mb-4">  <i class="fa-solid fa-money-bill-wave"></i>  {{ $immo->prix }} </span>
                        <span class="category mb-4"> <i class="fa-solid fa-handshake"></i> {{ $immo->transaction }} </span>

                        <ul class="mb-4 ">
                            @if (!empty($immo->etage) && $immo->etage != null)
                                <li class="badge bg-secondary"> étage : {{ $immo->etage }} </li>
                            @endif
                            @if (!empty($immo->nb_pieces) && $immo->nb_pieces != null)
                                <li class="badge bg-secondary"> Nombre de piéces : {{ $immo->nb_pieces }} </li>
                            @endif
                        </ul>

                        <h4>
                            <i class="fas fa-home"></i> | {{ $immo->wilaya_name }},
                            {{ $immo->daira_name }},
                            {{ $immo->adresse }}
                        </h4>


                        <h5 class="mb-2"> Description </h5>
                        <p>
                            {{ $immo->description }}
                        </p>
                    </div>
                    <hr>

                    <div class="owl-carousel">

                        @foreach ($album_photo as $photo)
                            <div>
                                <a href="{{ asset($photo->path_img) }}" data-lightbox="roadtrip">
                                    <img src="{{ asset($photo->path_img) }}" alt="image" class="border"
                                        style="   height: 200px;">

                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pourquoi nous choisir ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Nous plaçons vos besoins au centre de nos
                                    priorités. Voici ce qui nous distingue : <br>

                                    <b> Expérience et Expertise : </b> Forts de plusieurs années d’expérience dans le
                                    secteur
                                    immobilier, nous comprenons parfaitement le marché local et ses spécificités.
                                    <br>
                                    <b> Accompagnement Personnalisé : </b> Chaque client est unique, et nous offrons un
                                    service sur
                                    mesure, que vous soyez acheteur, vendeur ou locataire. <br>

                                    <b> Large Portefeuille de Biens : </b> Nous disposons d’un large choix de propriétés
                                    répondant à
                                    différents budgets et besoins, pour que vous trouviez le bien parfait.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accompagnement 24/7
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Équipe Dévouée : Nos agents immobiliers passionnés sont disponibles pour répondre à vos
                                    questions et vous guider à chaque étape de votre projet.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">


                    <div class="info-table">

                        <ul>
                            <li>
                                @if (!empty($immo->statut) && $immo->statut != null)
                                    @switch($immo-> statut)
                                        @case('disponible')
                                            <h4>
                                                <span class="badge bg-success text-white"> {{ $immo->statut }} </span>
                                                @foreach ($info_company as $info)
                                                    <span class=" mt-2 text-dark"> | {{ $info->company_tlf1 }} </span>
                                                @endforeach
                                            </h4>
                                        @break

                                        @case('réservé')
                                            <h4> <span class="badge bg-primary text-white"> {{ $immo->statut }} </span>
                                                @foreach ($info_company as $info)
                                                    <span class=" mt-2 text-dark"> | {{ $info->company_tlf1 }} </span>
                                                @endforeach
                                            </h4>
                                        @break

                                        @case('loué')
                                            <h4> <span class="badge bg-danger text-white"> {{ $immo->statut }} </span>
                                                @foreach ($info_company as $info)
                                                    <span class=" mt-2 text-dark"> | {{ $info->company_tlf1 }} </span>
                                                @endforeach
                                            </h4>
                                        @break

                                        @case('vendu')
                                            <h4> <span class="badge bg-warning text-white"> {{ $immo->statut }} </span>
                                                @foreach ($info_company as $info)
                                                    <span class=" mt-2 text-dark"> | {{ $info->company_tlf1 }} </span>
                                                @endforeach
                                            </h4>
                                        @break
                                    @endswitch
                                @endif

                            </li>
                            @if (!empty($immo->Superficie) && $immo->Superficie != null)
                                <li>
                                    <img src="{{ asset('assets/images/info-icon-01.png') }}" alt=""
                                        style="max-width: 52px;">
                                    <h4> {{ $immo->Superficie }} <br><span> Superficie </span></h4>
                                </li>
                            @endif
                            <li>
                                <img src="{{ asset('assets/images/info-icon-02.png') }}" alt=""
                                    style="max-width: 52px;">
                                <h4>Contract<br><span>Contrat </span></h4>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/info-icon-03.png') }}" alt=""
                                    style="max-width: 52px;">
                                <h4>Paiement <br><span>Procédure</span></h4>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @section('js')
        <script src="{{ asset('assets/js/lightbox.js') }}"></script>
        <script src="{{ asset('assets/owl/owl.carousel.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $(".owl-carousel").owlCarousel();
            });

            $('.owl-carousel').owlCarousel({
                loop: 0,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 4,
                        nav: true,

                    },
                    1700: {
                        nav: true,
                        items: 5,

                    }
                },
                nav: true,
                navText: [
                    '<i class="fas fa-chevron-left"></i>', // Icône gauche
                    '<i class="fas fa-chevron-right"></i>' // Icône droite
                ],
                dots: true,
            })
        </script>
    @endsection

@endsection
