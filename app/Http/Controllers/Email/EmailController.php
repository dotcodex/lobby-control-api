<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Validator;


class EmailController extends Controller
{
  
    public function index()
    {
        $saludo = 'hola'; 
        return response()->json(['data' => $saludo], 200) ;
    }


    public function sendContactEmail(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        
        Mail::to('carlos.20499@gmail.com')->queue(new MessageReceived($request->all()));
        
        return response()->json([
            "success"=> true,
            "message" => "Email enviado exitosamente!"
        ]);
    }

  
  
}
