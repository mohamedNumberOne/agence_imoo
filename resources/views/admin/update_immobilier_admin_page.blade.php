<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modification') }} <i class="fa-solid fa-house"></i>
        </h2>
    </x-slot>



    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session()->has('success'))
                        <div class="alert alert-success text-center"> {{ session('success') }} </div>
                    @endif

                    <div class="row">

                        <div class="col-md-2">
                            <h2 class="badge bg-success"> Modification <i class="fa-solid fa-file-pen"></i> </h2>

                        </div>

                        <div class="col-md-10 mt-4">
                            {{-- from --}}
                            <form class="row g-3" method="post"
                                action="{{ route('modifier_immobilier', $immobilier->id) }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-3">
                                    <label for="inputEmail4" class="form-label">Titre Produit</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="titre_produit"
                                        value="{{ $immobilier->titre_bien }}">
                                    @error('titre_produit')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="stat" class="form-label"> Statut </label>
                                    <select id="stat" class="form-select" name="statut" required>
                                          <option> </option>
                                         
                                         <option value="disponible"> disponible </option>
                                         <option value="réservé"> réservé </option>
                                         <option value="loué"> loué </option>
                                         <option value="vendu"> vendu </option>
                                    </select>
                                    @error('statut')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="Type" class="form-label"> Type immobilier </label>
                                    <select id="Type" class="form-select" name="type_immo">

                                        <option> </option>

                                        @foreach ($RealStateType as $type)
                                            @if ($type->nom_type != $immobilier->nom_type)
                                                <option value=" {{ $type->id }}"> {{ $type->nom_type }} </option>
                                            @else
                                                <option value=" {{ $type->id }}" selected> {{ $type->nom_type }} </option>
                                            @endif
                                        @endforeach

                                    </select>
                                    @error('type_immo')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="transaction" class="form-label"> Type de transaction </label>
                                    <select id="transaction" class="form-select" name="transaction" required>
                                        <option> </option>
                                        @if ($immobilier->transaction)
                                            <option value="{{ $immobilier->transaction }}" selected>
                                                {{ $immobilier->transaction }} </option>
                                        @endif
                                        <option value="vente"> vente </option>
                                        <option value="location"> location </option>
                                        <option value="partenariat"> partenariat </option>
                                        <option value="autre"> autre </option>
                                    </select>
                                    @error('transaction')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="wilaya" class="form-label"> Wilaya </label>
                                    <select id="wilaya" class="form-select" name="wilaya">
                                        <option> </option>
                                        @foreach ($all_wilayas as $wilaya)
                                            @if ($wilaya->id != $immobilier->wilaya_id)
                                                <option value=" {{ $wilaya->id }}"> {{ $wilaya->name }} -
                                                    {{ $wilaya->id }}
                                                </option>
                                            @else
                                                <option selected value=" {{ $wilaya->id }}"> {{ $wilaya->name }} -
                                                    {{ $wilaya->id }} </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('wilaya')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-md-3">
                                    <label for="Daira" class="form-label"> Daira </label>
                                    <select id="Daira" class="form-select" name="daira">
                                        <option> </option>
                                        @foreach ($all_dairas as $daira)
                                            @if ($daira->id != $immobilier->daira_id)
                                                <option value=" {{ $daira->id }}"> {{ $daira->name }} </option>
                                            @else
                                                <option selected value=" {{ $daira->id }}"> {{ $daira->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('daira')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-md-3">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="Address..." value="{{ $immobilier->adresse }}" name="adresse">
                                    @error('adresse')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-md-3">
                                    <label for="num_prop" class="form-label">Num. Propriétaire</label>
                                    <input type="text" class="form-control" id="num_prop"
                                        placeholder="Telph. Propriétaire" value="{{ $immobilier->num_prop }}" name="num_prop">
                                    @error('num_prop')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <hr>

                                <div class="col-md-5">
                                    <label for="Principale" class="form-label">Photo Principale</label>
                                    <input type="file" class="form-control" id="Principale" name="photo_principale"
                                        accept="image/*">
                                    <img src="{{ asset(  $immobilier->photo_principale) }}" alt="image"
                                        width="70px" class="border m-1">
                                    @error('photo_principale')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-7">
                                    <label for="Album" class="form-label">Album photos</label>
                                    <input type="file" class="form-control" id="Album" multiple
                                        name="album_photo[]" accept="image/*">
                                    <div>
                                        @foreach ($all_img as $img)
                                            <img src="{{ asset( $img->path_img) }}" alt="image"
                                                width="70px" class="border m-1 d-inline-block">
                                        @endforeach
                                    </div>
                                    @error('album_photo')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <hr>

                                <div class="col-md-3">
                                    <label for="Superficie" class="form-label"> Superficie </label>
                                    <input type="text" class="form-control" id="Superficie" name="superficie"
                                        value="{{ $immobilier->Superficie }}">
                                    @error('superficie')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="prix" class="form-label"> Prix </label>
                                    <input type="text" class="form-control" id="prix" name="prix"
                                        value="{{ $immobilier->prix }}">
                                    @error('prix')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="nb_pieces" class="form-label"> Nombre de piéces </label>
                                    <input type="number" class="form-control" id="nb_pieces" name="nb_pieces"
                                        value="{{ $immobilier->nb_pieces }}">
                                    @error('nb_pieces')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-md-3">
                                    <label for="etage" class="form-label"> étage </label>
                                    <input type="number" class="form-control" id="etage" name="etage"
                                        min="0" max="40" value="{{ $immobilier->etage }}">
                                    @error('etage')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="description" class="form-label"> description </label>
                                    <textarea required class="form-control" id="description" name="description" rows="6"
                                         >{{ $immobilier->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary"> modifier </button>
                                </div>
                            </form>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
