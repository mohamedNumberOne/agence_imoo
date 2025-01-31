<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestion Des Messages') }} <i class="fa-solid fa-message"></i>
        </h2>
    </x-slot>



    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($messages) > 0)


                        <div class="row">
                           
                                <div class="col-md-1">
                                    <h2 class="badge bg-success m-2"> Messages  <i class="fa-solid fa-message"></i>  </h2>
                                   
                                </div>
                           

                            <div class="col-md-11">
                                <table class="table table-bordered border-secondary text-center text-sm ">
                                    <tr>

                                        <td> Client </td>
                                        <td> Sujet </td>
                                        <td> Télph. </td>
                                        <td> Email </td>
                                        <td style="min-width: 300px"> Message </td>
                                        <td> Date </td>
                                        <td> Action </td>
                                    </tr>


                                    @foreach ($messages as $msg)
                                        <tr>
                                            <td> {{ $msg->nom_client }} </td>
                                            <td> {{ $msg->sujet }} </td>
                                            <td> {{ $msg->tlf_client }} </td>
                                            <td> {{ $msg->email_client }} </td>
                                            <td> {{ $msg->txt_message }} </td>
                                            <td> {{ $msg->created_at->format('Y/m/d - H\h:i') }} </td>
                                            <td>

                                                <!-- Button trigger modal -->
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{$msg->id}}">
                                                    <span class="badge bg-danger m-2"> <i class="fa-solid fa-trash"></i>
                                                    </span>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{$msg->id}}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <div class="modal-body">
                                                                Confirmer la Suppression
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Fermer</button>
                                                                <form action="{{ route('delete_msg', $msg->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">
                                                                        Supprimer
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    @else
                        <div class="alert text-center container alert-warning" role="alert">
                            Pas de Messages !
                        </div>
                    @endif



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
