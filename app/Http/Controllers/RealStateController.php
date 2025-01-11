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
        // return $info_company = Company::latest()->first();; 
        
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
       
        return view("admin.gestion_admin_page");
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RealState $realState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRealStateRequest $request, RealState $realState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RealState $realState)
    {
        //
    }
}
