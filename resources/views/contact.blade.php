@extends('layouts_user.template')



@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="/">Accueil</a> / Contact </span>
                    <h3>    Prendre un R.D.V </h3>
                </div>
            </div>
        </div>
    </div>



    <div class="contact-page section">
        @if (session()->has('msg'))
            <div class="alert alert-success container text-center m-auto mb-5" role="alert">
                {{ session('msg') }}
            </div>
        @endif
        <div class="container  ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>|  Contacter Nous  </h6>
                        <h2>Contactez nos agents</h2>
                    </div>
                    <p>Bienvenue chez    
                        @foreach ($info_company as $info)
                          <b>  {{ $info -> company_name }} </b>
                        @endforeach
                        , votre partenaire de confiance pour tous vos projets immobiliers.
                        Que vous cherchiez à acheter, vendre, louer ou investir, notre équipe est à votre disposition pour
                        vous accompagner à chaque étape.
                        <br>
                        N’hésitez pas à nous écrire via notre formulaire de contact pour toute demande ou à visiter nos
                        bureaux pour une assistance personnalisée.
                        <br>
                        Nous nous engageons à répondre rapidement à toutes vos
                        questions et à vous offrir des solutions adaptées à vos besoins. Votre satisfaction est notre
                        priorité !
                    </p>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item phone">
                                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                                <h6> 
                                    @foreach ($info_company as $info)
                                        {{ $info->company_tlf1 }}
                                    @endforeach<br><span>  Numéro de téléphone  </span>
                                </h6>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item email">
                                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                                <h6>
                                    @foreach ($info_company as $info)
                                        {{ $info->company_email }}
                                    @endforeach
                                    <br><span> Email</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
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
                                   <span class="text-danger" > {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="email">Email </label>
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="E-mail @" required="">
                                </fieldset>
                                @error('name')
                                    <span class="text-danger" >  {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Sujet</label>
                                    <input type="text" name="subject" id="subject" placeholder="Sujet...">
                                </fieldset>
                                @error('subject')
                                   <span class="text-danger" >   {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="tlf">Téléphone</label>
                                    <input type="number" name="tlf" id="tlf" placeholder="Téléphone...">
                                </fieldset>
                                @error('tlf')
                                  <span class="text-danger" >    {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Votre Message"></textarea>
                                </fieldset>
                                @error('message')
                                  <span class="text-danger" >    {{ $message }}</span>
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
                <div class="col-lg-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
                            width="100%" height="500px" frameborder="0"
                            style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
