<?php

namespace App\Http\Controllers\Diagnostic;

use App\Diagnostic;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendDiagnostic;
use Illuminate\Support\Facades\Mail;

class DiagnosticController extends Controller
{


    public function saveDiagnostic(Request $request)
    {
        $hola = 'holaaaaaa';
          
        $customer= $this->createCustomer($request);
                    $this->creteDiagnostic($request, $customer);

        Mail::to($customer->email)->queue(new SendDiagnostic($hola));
      
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
        $customer = Customer::updateOrCreate(['email' => $request->get('email')],
        ['fullname'=> $request->get('fullname'),
        'phone' =>  $request->get('phone')]);

        return $customer;
    }

    private function creteDiagnostic($request , $customer){

        $diagnostic = [
            'user_type' => $request->user_type,
             'edificie_quantity' => $request->edificie_quantity,
             'edifice_name' => $request->edifice_name,
             'commune_id'=> $request->commune_id,
             'customer_id' => $customer->id,
             'score' => $request->score,
         ];
     
         $createDiagnostics = Diagnostic::create($diagnostic);
         return $createDiagnostics;
    }


}
