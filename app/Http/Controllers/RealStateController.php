<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Models\RealState;
use App\Models\Company;
use App\Http\Requests\StoreRealStateRequest;
use App\Http\Requests\UpdateRealStateRequest;
use App\Models\Image;
use App\Models\RealStateType;
// use App\Models\Wilaya;
// use App\Models\Daira;
use App\Http\Requests\StoreCompanyRequest ;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;
use TheHocineSaad\LaravelAlgereography\Models\Daira;

use function Laravel\Prompts\select;

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
        $all_immo = RealState::join("real_state_types", "real_states.real_state_type_id",  '=', 'real_state_types.id')
            ->join('wilayas', "wilayas.id", '=', "real_states.wilaya_id")
            ->select("real_states.*", 'real_state_types.*', 'real_state_types.id as test_id', 'real_states.id as rs_id',  'wilayas.name as wilaya_name')
            ->get();
        // return  dd($all_immo) ;
        return view("properties", compact('info_company', "all_immo"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function index_page()
    {
        $info_company = $this->get_info_company();
        return view("welcome", compact('info_company'));
    }



    public function  details_immo($id)
    {
        $immo = RealState::join('real_state_types', 'real_states.real_state_type_id', '=', 'real_state_types.id')
            ->join('wilayas', "wilayas.id", '=', "real_states.wilaya_id")
            ->where('real_states.id', $id) // Filtrer par l'ID du bien immobilier
            ->select('real_states.*', 'real_state_types.nom_type as nom_type', 'wilayas.name as wilaya_name' )
            ->first();

        $info_company = $this->get_info_company();

        if ($immo) {

            return view("property-details", compact('immo', "info_company"));
        } else {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    // ADMIN :


    

    public function info_company()
    {
        $info_company =  Company::first() ;
       

        return view("admin.info", compact("info_company"));
    }

    public function update_company(StoreCompanyRequest $r ,  $id )
    {
        $company =  Company::find($id);

        if( $company ) {

 
            $company-> update([

                "company_name" => $r->company_name,
                "company_tlf1" => $r->company_tlf1,
                "company_tlf2" => $r->company_tlf2,
                "company_email" => $r->company_email,
                "company_adresse" => $r->company_adresse,
                "fb_link" => $r->fb_link,
                "insta_link" => $r->insta_link,
                "tiktok_link" => $r->tiktok_link,
                // "tiktok_link" => $r->tiktok_link, 

            ]) ;
            return  redirect()->back()->with('success', 'informations modifiées');

        }

        return  redirect()->back() ; 

    }


    
    public function immobilier_admin_page()
    {
        $RealStateType =  RealStateType::all();
        $all_wilayas = Wilaya::all();

        return view("dashboard", compact('RealStateType', "all_wilayas"));
    }


    public function get_daira_par_id_wilaya($id_wilaya)
    {
        $all_dairas = Daira::where("wilaya_id",   $id_wilaya)->get();
        return response()->json($all_dairas);
    }


    public function add_immobilier(StoreRealStateRequest $request)
    {

        if ($request->hasFile('photo_principale')  &&  $request->file('photo_principale')->isValid()) {

            $file = $request->file('photo_principale');
            $path_photo_principale = $file->store('produits', 'public');
        } else {
            $path_photo_principale  = NULL;
        }


        $immo =   RealState::create([

            "titre_bien" => $request->titre_produit,
            "real_state_type_id" => $request->type_immo,
            "etage" => $request->etage,
            "wilaya_id" => $request->wilaya,
            "daira_id" => $request->daira,
            "statut" =>  'disponible',
            "adresse" => $request->adresse,
            "photo_principale" =>  $path_photo_principale,
            "prix" =>   $request->prix,
            "Superficie" => $request->superficie,
            "nb_pieces" => $request->nb_pieces,
            "transaction" => $request->transaction,
            "description" => $request->description,

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



    public function gestion_admin_page()
    {

        $all_real_states = RealState::join("real_state_types", "real_state_types.id", "=", "real_states.real_state_type_id")
            ->select("real_states.*", "real_state_types.nom_type as nom_type") // Facultatif : sélectionnez les colonnes nécessaires
            ->paginate(8);

        return view("admin.gestion_admin_page", compact('all_real_states'));
    }



    public function update_immobilier_admin_page($id)
    {

        $immobilier =  RealState::join('real_state_types',  'real_state_types.id', '=', "real_states.real_state_type_id")
            ->select('real_states.*', 'real_state_types.id as id_type_rs', 'nom_type as nom_type')
            ->where('real_states.id', $id)
            ->first();;
        if (
            $immobilier
        ) {
            $all_img = $this->show_all_img($id);
            $all_wilayas = Wilaya::all();
            $all_dairas = Daira::orderBy('name')->get();
            $RealStateType =  RealStateType::all();
            return view("admin.update_immobilier_admin_page", compact('immobilier', 'RealStateType', 'all_wilayas', "all_dairas", "all_img"));
        }

        return redirect()->back()->with('erreur',  "produit introuvable");
    }


    public function modifier_immobilier(UpdateRealStateRequest  $request,  $id)
    {
        $immo =   RealState::find($id);


        if ($request->hasFile('photo_principale')  &&  $request->file('photo_principale')->isValid()) {

            $file = $request->file('photo_principale');
            $path_photo_principale = $file->store('produits', 'public');
        } else {
            $path_photo_principale  = $immo->photo_principale;
        }


        if ($immo) {

            $immo->update([
                "titre_bien" => $request->titre_produit,
                "real_state_type_id" => $request->type_immo,
                "etage" => $request->etage,
                "wilaya_id" => $request->wilaya,
                "daira_id" => $request->daira,
                "statut" =>  'disponible',
                "adresse" => $request->adresse,
                "photo_principale" =>  $path_photo_principale,
                "prix" =>   $request->prix,
                "Superficie" => $request->superficie,
                "nb_pieces" => $request->nb_pieces,
                "transaction" => $request->transaction,
                "description" => $request->description,
                "statut" => $request->statut,

            ]);


            // ImageController

            if ($request->hasFile('album_photo')    &&  ! empty($request->file('album_photo'))) {
                $files = $request->file('album_photo');

                $this->store($files, $immo);
            }
        }

        return redirect()->back()->with('success', "produit modifié");
    }


    public function  delete_immobilier($id)
    {
        $immo =   RealState::find($id);

        if ($immo) {
            file_exists('storage/' . $immo->photo_principale) ? unlink('storage/' .  $immo->photo_principale) : "";



            $imgs =  Image::where('real_state_id', $id)->get();

            foreach ($imgs as $img) {
                file_exists('storage/' . $img->path_img) ? unlink('storage/' .  $img->path_img) : "";
            }

            $immo->delete();
            return redirect()->back()->with('success',  "produit supprimé");
        } else {
            return redirect()->back();
        }
    }
}
