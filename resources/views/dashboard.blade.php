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

                        <div class="col-md-2">
                            <h2 class="badge bg-success m-2">ajouter un immobilier <i class="fa-solid fa-house"></i></h2>
                        </div>

                        <div class="col-md-10 mt-4">
                            {{-- from --}}
                            <form class="row g-3">

                                <div class="col-md-4">
                                    <label for="inputEmail4" class="form-label">Titre Produit</label>
                                    <input type="text" class="form-control" id="inputEmail4" name="">
                                </div>

                                <div class="col-md-4">
                                    <label for="Type" class="form-label"> Type immobilier </label>
                                    <select id="Type" class="form-select" name="">
                                        <option> </option>
                                        <option value=""> Villa </option>
                                        <option value=""> appartement </option>
                                        <option value=""> boutique </option>
                                        <option value=""> Terrain </option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="transaction" class="form-label"> Type de transaction </label>
                                    <select id="transaction" class="form-select" name="transaction">
                                        <option> </option>
                                        <option value=""> vente </option>
                                        <option value=""> location </option>
                                        <option value=""> autre </option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="wilaya" class="form-label"> Wilaya </label>
                                    <select id="wilaya" class="form-select" name="wilaya">
                                        <option> </option>
                                        <option value=""> Alger </option>
                                        <option value=""> oran </option>
                                        <option value=""> annaba </option>
                                    </select>
                                </div>


                                <div class="col-md-4">
                                    <label for="Daira" class="form-label"> Daira </label>
                                    <select id="Daira" class="form-select" name="daira">
                                        <option> </option>
                                        <option value=""> Daira 1 </option>
                                        <option value=""> Daira 2 </option>
                                        <option value=""> Daira 3 </option>
                                    </select>
                                </div>


                                <div class="col-md-4">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Address...">
                                </div>

                                <hr>

                                <div class="col-md-5">
                                    <label for="Principale" class="form-label">Photo Principale</label>
                                    <input type="file" class="form-control" id="Principale" name="photo_principale">
                                </div>

                                <div class="col-md-7">
                                    <label for="Album" class="form-label">Album photos</label>
                                    <input type="file" class="form-control" id="Album" multiple name="album_photo">
                                </div>

                                <hr>

                                <div class="col-md-4">
                                    <label for="Superficie" class="form-label"> Superficie (m²) </label>
                                    <input type="number" class="form-control" id="Superficie" name="superficie">
                                </div>

                                <div class="col-md-4">
                                    <label for="prix" class="form-label"> Prix (Da) </label>
                                    <input type="number" class="form-control" id="prix" name="prix">
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