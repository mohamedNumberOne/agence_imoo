<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRealStateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre_produit' => "required|" ,
            'type_immo' => "required|exists:real_state_types,id"   ,
            'transaction' => "required|" ,
            'wilaya' => "required|exists:wilayas,id" ,
            'daira' => "required|exists:dairas,id" ,
            // 'photo_principale' => "required|" ,
            // 'album_photo' => "required|" ,
            'superficie' => "required|" ,
            'prix' => "required|" ,
            'adresse' => "required|" ,
            'etage' => "required|" ,
        ];
    }
}
