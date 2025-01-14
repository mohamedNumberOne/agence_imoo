<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Immobiliers') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="row">
                        @if ( session() -> has('success') )
                            <div class="alert alert-success text-center"> {{ session("success") }} </div>
                        @endif
                        <div class="col-md-2">
                            <h2 class="badge bg-success m-2">Ajouter un immobilier <i class="fa-solid fa-house"></i>
                            </h2>
                        </div>

                        <div class="col-md-10 mt-4">
                            {{-- from --}}
                            <form class="row g-3" method="post" action="{{  route('add_immobilier')  }}"  enctype="multipart/form-data" >
                                @csrf

                                <div class="col-md-4">
                                    <label for="inputEmail4" class="form-label">Titre Produit</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="titre_produit"  value="{{ old('titre_produit')   }}" >
                                    @error("titre_produit")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="Type" class="form-label"> Type immobilier </label>
                                    <select id="Type" class="form-select" name="type_immo"   >

                                        <option> </option>

                                        @foreach ($RealStateType as $type)
                                        <option value=" {{ $type -> id }}"> {{ $type -> nom_type }} </option>
                                        @endforeach

                                    </select>
                                    @error("type_immo")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="transaction" class="form-label"> Type de transaction </label>
                                    <select id="transaction" class="form-select" name="transaction">
                                        <option> </option>
                                        <option value="vente"> vente </option>
                                        <option value="location"> location </option>
                                        <option value="partenariat"> partenariat </option>
                                        <option value="autre"> autre </option>
                                    </select>
                                    @error("transaction")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="wilaya" class="form-label"> Wilaya </label>
                                    <select id="wilaya" class="form-select" name="wilaya">
                                        <option> </option>
                                        @foreach ($all_wilayas as $wilaya)
                                        <option value=" {{ $wilaya -> id }}"> {{ $wilaya -> name }} - {{ $wilaya -> id
                                            }} </option>
                                        @endforeach
                                    </select>
                                    @error("wilaya")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-md-4">
                                    <label for="Daira" class="form-label"> Daira </label>
                                    <select id="Daira" class="form-select" name="daira">
                                        <option> </option>
                                        @foreach ($all_dairas as $daira)
                                        <option value=" {{ $daira -> id }}"> {{ $daira -> name }} </option>
                                        @endforeach
                                    </select>
                                    @error("daira")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-md-4">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Address..." value="{{ old('adresse')  }}" 
                                        name="adresse">
                                    @error("adresse")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <hr>

                                <div class="col-md-5">
                                    <label for="Principale" class="form-label">Photo Principale</label>
                                    <input type="file" class="form-control" id="Principale" name="photo_principale" accept="image/*" >
                                    @error("photo_principale")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-7">
                                    <label for="Album" class="form-label">Album photos</label>
                                    <input type="file" class="form-control" id="Album" multiple name="album_photo[]"  accept="image/*" >
                                    @error("album_photo")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <hr>

                                <div class="col-md-3">
                                    <label for="Superficie" class="form-label"> Superficie </label>
                                    <input type="text" class="form-control" id="Superficie" name="superficie" value="{{ old('superficie')  }}" >
                                    @error("superficie")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="prix" class="form-label"> Prix   </label>
                                    <input type="text" class="form-control" id="prix" name="prix" value="{{ old('prix')  }}"  >
                                    @error("prix")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="nb_pieces" class="form-label"> Nombre de piéces   </label>
                                    <input type="number" class="form-control" id="nb_pieces" name="nb_pieces"  value="{{ old('nb_pieces')  }}"  >
                                    @error("nb_pieces")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-md-3">
                                    <label for="etage" class="form-label"> étage </label>
                                    <input type="number" class="form-control" id="etage" name="etage" min="0" max="40"   value="{{ old('etage')  }}"  >
                                    @error("etage")
                                    <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary"> Ajouter </button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>