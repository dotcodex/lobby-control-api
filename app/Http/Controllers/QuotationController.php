<?php

namespace App\Http\Controllers;

use App\Quotation;
use App\Customer;
use Illuminate\Http\Request;
use App\Mail\SendQuotation;
use Illuminate\Support\Facades\Mail;

class QuotationController extends Controller
{
   
    public function saveQuotation(Request $request)
    {
        $customer = $this->createCustomer($request);
        $this->creteQuotations($request, $customer);

        $letter = 'holaaa';

        Mail::to($customer->email)->queue(new SendQuotation($letter));
      
        return response()->json([
            "success"=> true,
            "message" => "Email enviado!"
        ]);
    }

    private function createCustomer($request)
    {
        $rules=[
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ];
        $this->validate($request, $rules);
        
        $customer = Customer::updateOrCreate(
            ['email' => $request->get('email')],
            [  
                'fullname'=> $request->get('fullname'),
                'phone' =>  $request->get('phone')
            ]
        );

        return $customer;
    }

    private function creteQuotations($request , $customer){
        $rules=[
            'user_type' => 'required',
            'edificie_quantity' => 'required|email',
            'edifice_name' => 'required',
            'commune_id' => 'required',
            'customer_id' => 'required'
            
        ];

       // $this->validate($request, $rules);

        $quotation = [
            'user_type' => $request->user_type,
             'edificie_quantity' => $request->edificie_quantity,
             'edifice_name' => $request->edifice_name,
             'commune_id'=> $request->commune_id,
             'customer_id' => $customer->id
             
         ];
     
         $createQuotation = Quotation::create($quotation);
        
    }

   
}
