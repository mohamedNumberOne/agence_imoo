<?php

namespace App\Http\Controllers;

use App\Models\RealState;
use App\Models\Company;
use App\Http\Requests\StoreRealStateRequest;
use App\Http\Requests\UpdateRealStateRequest;

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
        $info_company = $this ->  get_info_company()  ;
        return view("contact", compact('info_company'));
    }

    public function nos_immobiliers_page()
    {

        $info_company = $this ->  get_info_company()  ;
        return view("properties", compact('info_company'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function index_page()
    {
        $info_company = $this ->  get_info_company()  ;
        return view("welcome", compact('info_company'));
    }

    /**
     * Store a newly created resource in storage.
     */

    // ADMIN :

    public function immobilier_admin_page()
    {
       
        return view("dashboard");
    }


    public function gestion_admin_page()
    {
        $all_real_states = RealState::all();
        return view("admin.gestion_admin_page", compact('all_real_states') );
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
