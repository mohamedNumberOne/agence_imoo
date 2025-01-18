 @extends('layouts_user.template')



 @section('content')
     <div class="section properties">
         <div class="container">
             <ul class="properties-filter">
                 <li>
                     <a class="is_active" href="#!" data-filter="*"> Touts </a>
                 </li>
                 <li>
                     <a href="#!" data-filter=".adv">Apartments</a>
                 </li>
                 <li>
                     <a href="#!" data-filter=".stu">Studios</a>
                 </li>
                 <li>
                     <a href="#!" data-filter=".str">Villas </a>
                 </li>
                 <li>
                     <a href="#!" data-filter=".rac">Terrains</a>
                 </li>

             </ul>
             <div class="row properties-box">

                 @foreach ($all_immo as $immo)
                     <div
                         class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 {{ $immo->class_rech }} ">
                         <div class="item">
                             <a href="{{ route('details_immo', $immo->rs_id) }}">
                                 <div
                                     style="height: 200px; width:  100% ; background-image: url({{ asset('storage/' . $immo->photo_principale) }}) 
                                    ; background-size : cover ; background-repeat : no-repeat ;background-position :center ;
                                    ">
                                 </div>

                             </a>

                             <span class="category"> {{ $immo->transaction }} - {{ $immo->nom_type }} </span>
                             <h6> {{ $immo->prix }} </h6>
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

                            
                             <h4><a href="{{ route('details_immo', $immo->rs_id) }}"> {{ $immo->wilaya_name }} |
                                     {{ $immo->adresse }} </a></h4>
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
                                 <a href="{{ route('details_immo', $immo->rs_id) }}"> visiter</a>
                             </div>
                         </div>
                     </div>
                 @endforeach

             </div>


         </div>
     </div>
 @endsection
