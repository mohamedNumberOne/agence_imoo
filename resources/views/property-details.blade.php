@extends('layouts_user.template')



@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"> Détails / Produit </span>
                    <h3> N'hésitez pas à nous contacter. </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="single-property section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main-image">
                        <img src=" {{ asset('storage/' . $immo->photo_principale) }} " alt="photo_principale">
                    </div>
                    <div class="main-content">
                        <span class="category mb-4"> {{ $immo->nom_type }} </span>

                        <h4> <i class="fas fa-home"></i> | {{ $immo->wilaya_name }}, {{ $immo->adresse }} </h4>
                        <h5 class="mb-2"> Description </h5>
                        <p>
                            {{ $immo->description }}
                        </p>
                    </div>
                    <hr>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Best useful links ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod
                                    tempor kinfolk
                                    tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice,
                                    chillwave
                                    vexillologist incididunt ut labore consectetur <code>adipiscing</code> elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does this work ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod
                                    tempor kinfolk
                                    tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice,
                                    chillwave
                                    vexillologist incididunt ut labore consectetur <code>adipiscing</code> elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why is Villa the best ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod
                                    tempor kinfolk
                                    tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice,
                                    chillwave
                                    vexillologist incididunt ut labore consectetur <code>adipiscing</code> elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
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
                                                 <span class=" mt-2 text-dark" >  |  {{ $info->company_tlf1 }} </span>
                                                @endforeach
                                            </h4>
                                        @break
                                        @case('réservé')
                                            <h4> <span class="badge bg-primary text-white"> {{ $immo->statut }} </span> </h4>
                                        @break

                                        @case('loué')
                                            <h4> <span class="badge bg-danger text-white"> {{ $immo->statut }} </span> </h4>
                                        @break

                                        @case('vendu')
                                            <h4> <span class="badge bg-warning text-white"> {{ $immo->statut }} </span> </h4>
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
@endsection
