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
                    @if ( session() -> has('success') )
                    <div class="alert alert-success text-center"> {{ session("success") }} </div>
                    @endif
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
                                    <td> numéro Prop. </td>
                                    <td> Action </td>
                                </tr>
                                @foreach ($all_real_states as $rs)
                                <tr>

                                    <td> {{ $rs-> titre_bien }} </td>
                                    <td> {{ $rs-> prix }} DA </td>
                                    <td> {{ $rs-> nom_type }} </td>
                                    <td> {{ $rs-> adresse }} </td>
                                    <td> <img src="{{  asset(  $rs->photo_principale) }}" alt="image"
                                            width="70px"> </td>
                                    <td>
                                        @switch( $rs-> statut )
                                        @case( "disponible" )

                                        <span class="badge bg-success"> {{ $rs-> statut }} </span>
                                        @break

                                        @case( "réservé")
                                        <span class="badge bg-primary"> {{ $rs-> statut }} </span>

                                        @break

                                        @case( "loué")
                                        <span class="badge bg-danger"> {{ $rs-> statut }} </span>

                                        @break

                                        @case( "vendu")
                                        <span class="badge bg-warning"> {{ $rs-> statut }} </span>

                                        @break

                                        @endswitch

                                    </td>
                                    <td>
                                        {{ $rs-> num_prop }}
                                    </td>
                                    <td>

                                        {{-- <form action="{{ route('delete_immobilier' ,   $rs->  id ) }}"
                                            class="d-inline-block" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger btn-delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form> --}}




                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#{{ $rs ->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="{{ $rs ->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Suppression
                                                    </div>
                                                    <div class="modal-footer">
                                                     
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Fermer</button>

                                                        <form action="{{ route('delete_immobilier' ,   $rs->  id ) }}"
                                                            class="d-inline-block" method="post">
                                                            @csrf
                                                            @method("DELETE")
                                                            <button class="btn btn-danger btn-delete" type="submit">
                                                                supprimer
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                        <a href="{{ route('update_immobilier_admin_page',  $rs-> id ) }}">
                                            <span class="btn btn-primary m-2">
                                                <i class="fa-solid fa-file-pen"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach


                            </table>
                            {{ $all_real_states->links() }}

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