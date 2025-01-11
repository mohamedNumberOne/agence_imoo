<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function messages_admin_page()
    {
        $messages = Message::all();
        return view("admin.messages", compact("messages"));
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function add_message(StoreMessageRequest $request)
    {


        Message::create([
            "nom_client" =>   $request->name,
            "email_client" => $request->email,
            "tlf_client" =>  $request->tlf,
            "sujet"     => $request->subject,
            "txt_message"    => $request->message

        ]);
        
        $msg = "Message envoyé";
    

        return view("contact" , compact('msg') )   ;
    }
}
