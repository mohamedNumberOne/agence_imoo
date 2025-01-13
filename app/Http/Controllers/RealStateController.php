<?php

namespace App\Http\Controllers;

use App\Models\RealState;
use App\Models\Company;
use App\Http\Requests\StoreRealStateRequest;
use App\Http\Requests\UpdateRealStateRequest;
use App\Models\RealStateType;
// use App\Models\Wilaya;
// use App\Models\Daira;

use TheHocineSaad\LaravelAlgereography\Models\Wilaya;
use TheHocineSaad\LaravelAlgereography\Models\Daira;



class RealStateController extends Controller
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
        RealState::create([
            
            // id	titre_bien	photo_principale	etage	/ statut	adresse	    Superficie 	 real_state_type_id	 wilaya_id	daira_id	 

            "titre_bien" => $request->titre_produit,
            "real_state_type_id" => $request->type_immo,
            "etage" => $request->etage, 
            "wilaya_id" => $request->wilaya,
            "daira_id" => $request->daira,
            "statut" =>  'disponible' ,
            "adresse" => $request->adresse,
            "photo_principale" =>  "testimg" ,
            // "" =>  $request->album_photo,  $request->photo_principale 
            "Superficie" => $request->superficie,
          
           

        ]);

        return redirect() -> back() ;
    }



    public function gestion_admin_page()
    {
        $all_real_states = RealState::all();


        return view("admin.gestion_admin_page", compact('all_real_states'));
    }



    public function update_immobilier_admin_page()
    {

        return view("admin.update_immobilier_admin_page");
    }





    public function store(StoreRealStateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RealState $realState)
    {
        //
    }
}
