<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion D\'immobiliers') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="row">



                        @if (count($all_real_states) > 0)

                            <div class="col-md-1">
                                <h2 class="badge bg-success m-2"> Gestion <i class="fas fa-home"></i> </h2>
                            </div>


                            <div class="col-md-11">

                                <table class="table table-bordered border-secondary text-center">
                                    <tr>

                                        <td> Immobilier </td>
                                        <td> Prix </td>
                                        <td> Type </td>
                                        <td> Adresse </td>
                                        <td> Photo </td>
                                        <td> Statut </td>
                                        <td> Action </td>
                                    </tr>
                                    @foreach ($all_real_states as $rs)
                                        <tr>

                                            <td> {{ $rs->titre_bien }} </td>
                                            <td> {{ $rs->prix }} DA </td>
                                            <td> {{ $rs->nom_type }} </td>
                                            <td> {{ $rs->adresse }} </td>
                                            <td> <img src="{{ asset('storage/' . $rs->photo_principale) }}"
                                                    alt="image" width="70px"> </td>
                                            <td>
                                                @switch($rs-> statut)
                                                    @case('disponible')
                                                        <span class="badge bg-success"> {{ $rs->statut }} </span>
                                                    @break

                                                    @case('réservé')
                                                        <span class="badge bg-primary"> {{ $rs->statut }} </span>
                                                    @break

                                                    @case('loué')
                                                        <span class="badge bg-danger"> {{ $rs->statut }} </span>
                                                    @break

                                                    @case('vendu')
                                                        <span class="badge bg-warning"> {{ $rs->statut }} </span>
                                                    @break
                                                @endswitch

                                            </td>
                                            <td>

                                                <!-- Button trigger modal -->
                                                {{-- <button type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <span class="badge bg-danger m-2">
                                            </span>
                                        </button> --}}

                                                {{--
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        Confirmer la Suppression

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Fermer</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                                <button type="button" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                <a href="{{ route('update_immobilier_admin_page', $rs->id) }}">
                                                    <span class="btn btn-primary m-2">
                                                        <i class="fa-solid fa-file-pen"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </table>
                            @else
                                <div class="alert text-center container alert-warning" role="alert">
                                    Pas de Produits !
                                </div>


                                <div class="col-md-11">

                                    <table class="table table-bordered border-secondary text-center">
                                        <tr>

                                            <td> Immobilier </td>
                                            <td> Prix </td>
                                            <td> Type transaction </td>
                                            {{-- <td> Adresse </td>
                                    <td> Photo </td>
                                    <td> Superficie (m²) </td> --}}
                                            <td> Action </td>
                                        </tr>
                                        @foreach ($all_real_states as $rs)
                                            <tr>

                                                <td> {{ $rs->id }} </td>
                                                <td> {{ $rs->created_at }} </td>
                                                <td> {{ $rs->updated_at }} </td>
                                                <td>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                        <span class="badge bg-danger m-2"> <i
                                                                class="fa-solid fa-trash"></i>
                                                        </span>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <div class="modal-body">
                                                                    Confirmer la Suppression
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Fermer</button>
                                                                    <button type="button" class="btn btn-danger">
                                                                        Supprimer
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="{{ route('update_immobilier_admin_page', $rs->id) }}">
                                                        <span class="badge bg-primary m-2">
                                                            <i class="fa-solid fa-file-pen"></i>
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                @else
                                    <div class="alert text-center container alert-warning" role="alert">
                                        Pas de Produits !
                                    </div>

                        @endif
                    </div>




                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
