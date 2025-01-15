<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // StoreImageRequest $request ,

    public function store(  $files,  $immo )
    {
        
        if (is_array($files)) {
            
            // Vérifie si chaque fichier est valide
            foreach ($files as $file) {
                if ($file->isValid()) {
                    // Exemple de sauvegarde (à adapter selon votre logique)
                    Image::create([
                        "real_state_id" =>  $immo->id,
                        "path_img" => $file->store('produits', 'public') // Enregistre le fichier
                    ]);
                }
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show_all_img( $id )
    {
        return  $all_imgs = Image::where("real_state_id", $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
