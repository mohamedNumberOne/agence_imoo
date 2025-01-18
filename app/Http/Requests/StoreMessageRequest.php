<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
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
            "name" => "required|string|max:60",
            "email" => "required|string|max:80",
            "tlf" => "required|numeric|digits_between:1,15",
            "subject" => "required|string",
            "message" => "required|string|max:500",
             
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "Le nom est obligatoire",
            "email" => "L'Email est obligatoire",
            "tlf" => "Le numéro est obligatoire",
            "subject" => "Le sujet est obligatoire",
            "message" => "Le message est obligatoire",

        ];
    }

}
