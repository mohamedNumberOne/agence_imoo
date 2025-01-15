<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Models\RealState;
use App\Models\Company;
use App\Http\Requests\StoreRealStateRequest;
use App\Http\Requests\UpdateRealStateRequest;
use App\Models\RealStateType;
// use App\Models\Wilaya;
// use App\Models\Daira;

use TheHocineSaad\LaravelAlgereography\Models\Wilaya;
use TheHocineSaad\LaravelAlgereography\Models\Daira;
// use App\Http\Controllers\ImageController; 


class RealStateController extends ImageController
{
    /**
     * Display a listing of the resource.
     */


    public function get_info_company()
    {
        return $info_company = Company::all();
    }

    public function contact_page()
    {
        $info_company = $this->get_info_company();
        return view("contact", compact('info_company'));
    }

    public function nos_immobiliers_page()
    {

        $info_company = $this->get_info_company();
        return view("properties", compact('info_company'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function index_page()
    {
        $info_company = $this->get_info_company();
        return view("welcome", compact('info_company'));
    }

    /**
     * Store a newly created resource in storage.
     */

    // ADMIN :

    public function immobilier_admin_page()
    {
        $RealStateType =  RealStateType::all();

        $all_wilayas = Wilaya::all();
        $all_dairas = Daira::orderBy('name')->get();

        return view("dashboard", compact('RealStateType', "all_wilayas", "all_dairas"));
    }




    public function add_immobilier(StoreRealStateRequest $request)
    {



        if ($request->hasFile('photo_principale')  &&  $request->file('photo_principale')->isValid()) {

            $file = $request->file('photo_principale');
            $path_photo_principale = $file->store('produits', 'public');
        } else {
            $path_photo_principale  = NULL;
        }




        // return dd($path_photo_principale) ; 
        $immo =   RealState::create([

            // id	titre_bien	photo_principale	etage	/ statut	adresse	    Superficie 	 real_state_type_id	 wilaya_id	daira_id	 

            "titre_bien" => $request->titre_produit,
            "real_state_type_id" => $request->type_immo,
            "etage" => $request->etage,
            "wilaya_id" => $request->wilaya,
            "daira_id" => $request->daira,
            "statut" =>  'disponible',
            "adresse" => $request->adresse,
            "photo_principale" =>  $path_photo_principale,
            "prix" =>   $request->prix,
            // "" =>  $request->album_photo,  $request->photo_principale 
            "Superficie" => $request->superficie,
            "nb_pieces" => $request->nb_pieces,
            "transaction" => $request->transaction,

        ]);


        // ImageController
        if ($immo) {

            if ($request->hasFile('album_photo')    &&  ! empty($request->file('album_photo'))) {
                $files = $request->file('album_photo');

                $this->store($files, $immo);
            }
        }


        return redirect()->back()->with("success", "Produit ajouté!");
    }


    public function modifier_immobilier(StoreRealStateRequest $request)
    {
        $all_real_states = RealState::join("real_state_types", "real_state_types.id", "=", "real_states.real_state_type_id")
            ->get();

        return view("admin.update_immobilier_admin_page", compact('all_real_states'));
    }

    public function gestion_admin_page()
    {

        $all_real_states = RealState::join ("real_state_types", "real_state_types.id", "=", "real_states.real_state_type_id")
        ->select('real_states.*', 'real_state_types.id as id_type_rs' , 'nom_type as nom_type')
        ->get();

        return view("admin.gestion_admin_page", compact('all_real_states'));
    }



    public function update_immobilier_admin_page($id)
    {

        $immobilier =  RealState::join('real_state_types'  ,  'real_state_types.id' , '=' , "real_states.real_state_type_id"  )
        ->select('real_states.*', 'real_state_types.id as id_type_rs', 'nom_type as nom_type')
        ->where('real_states.id', $id)
        ->first();
        
        ;
        if (
            $immobilier
        ) {
            $all_wilayas = Wilaya::all();
            $all_dairas = Daira::orderBy('name')->get();
            $RealStateType =  RealStateType::all();
            return view("admin.update_immobilier_admin_page", compact('immobilier', 'RealStateType', 'all_wilayas', "all_dairas"));
        }

        return redirect()-> back() ;
       
    }
}
