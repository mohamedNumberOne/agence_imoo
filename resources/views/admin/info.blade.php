<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informations') }}
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
                            <h2 class="badge bg-success"> Informations <i class="fa-solid fa-circle-info"></i> </h2>
                        </div>

                        <div class="col-md-10 mt-4">
                            {{-- from --}}
                            <form class="row g-3" method="post"
                                action="{{ route('update_company', $info_company->id) }}">
                                @csrf

                                <div class="col-md-4">
                                    <label for="inputEmail4" class="form-label">Nom de l'entreprise </label>
                                    <input type="text" class="form-control" id="inputEmail4" name="company_name"
                                        value="{{ $info_company->company_name }}">
                                    @error('company_name')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-md-4">
                                    <label for="inputAddress" class="form-label">numéro 1</label>
                                    <input type="number" class="form-control" id="inputAddress"
                                        value="{{ $info_company->company_tlf1 }}" name="company_tlf1">
                                    @error('company_tlf1')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>


                                <div class="col-md-4">
                                    <label for="company_tlf2" class="form-label">numéro 2</label>
                                    <input type="number" class="form-control" id="company_tlf2"
                                        value="{{ $info_company->company_tlf2 }}" name="company_tlf2">
                                    @error('company_tlf2')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>



                                <hr>



                                <div class="col-md-4">
                                    <label for="prix" class="form-label"> email </label>
                                    <input type="email" class="form-control" id="prix" name="company_email"
                                        value="{{ $info_company->company_email }}">
                                    @error('company_email')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <label for="company_adresse" class="form-label"> Adresse </label>
                                    <input type="text" class="form-control" id="company_adresse"
                                        name="company_adresse" value="{{ $info_company->company_adresse }}">
                                    @error('company_adresse')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <hr>



                               <div class="col-md-4">
                                    <label for="insta_link" class="form-label"> Instagram </label>
                                    <input type="url" class="form-control" id="insta_link" name="insta_link"
                                        value="{{ $info_company->insta_link }}">
                                    @error('insta_link')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>
 

                                <div class="col-md-4">
                                    <label for="fb_link" class="form-label">   FaceBook</label>
                                    <input type="url" class="form-control" id="fb_link"
                                         value="{{ $info_company->fb_link }}" name="fb_link">
                                    @error('fb_link')
                                        <span class="text-danger text-center"> {{ $message }} </span>
                                    @enderror
                                </div>

    
                                <div class="col-md-4">
                                    <label for="tiktok_link" class="form-label"> TikTok </label>
                                    <input type="url" class="form-control" id="tiktok_link"
                                         value="{{ $info_company->tiktok_link }}" name="tiktok_link">
                                    @error('tiktok_link')
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
