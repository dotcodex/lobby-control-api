<?php

namespace App\Http\Controllers;

use App\Diagnostic;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendDiagnostic;
use App\Mail\DiagnosticAdmin;
use Illuminate\Support\Facades\Mail;

class DiagnosticController extends Controller
{


    public function saveDiagnostic(Request $request)
    {

        $customer = $this->createCustomer($request);
        $this->creteDiagnostic($request, $customer);
        $letter = $this->processRiskLevel($request);
        if(!$letter){
            return response()->json([
                "success" => false,
                "message" => "mensaje invalido"
            ], 409);
        }


        Mail::to($customer->email)->queue(new SendDiagnostic($letter, $customer));
        Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new DiagnosticAdmin($letter, $customer));

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

    private function creteDiagnostic($request , $customer){
        $rules=[
            'user_type' => 'required',
            'edificie_quantity' => 'required',
            'edifice_name' => 'required',
            'commune_id' => 'required',
            'customer_id' => 'required',
            'score' => 'required'
        ];

       // $this->validate($request, $rules);

        $diagnostic = [
            'user_type' => $request->user_type,
             'edificie_quantity' => $request->edificie_quantity,
             'edifice_name' => $request->edifice_name,
             'commune_id'=> $request->commune_id,
             'customer_id' => $customer->id,
             'score' => $request->score,
         ];

         $createDiagnostics = Diagnostic::create($diagnostic);

    }

    private function processRiskLevel($request){
        // 0 No  La clasificación de riesgo de tu comunidad es A
        // 1 No  La clasificación de riesgo de tu comunidad es B
        // 2 No  La clasificación de riesgo de tu comunidad es B
        // 3 No  La clasificación de riesgo de tu comunidad es C
        // 4 No  La clasificación de riesgo de tu comunidad es C
        // 5 No  La clasificación de riesgo de tu comunidad es C
        // 6 No  La clasificación de riesgo de tu comunidad es C
        $scoreTotal = $request->score;
        $level = $scoreTotal / 10;
        if ($level == 0) {
            return 'A';
        }
        if ($level > 0 && $level < 3) {
            return 'B';
        }
        if ($level >= 3 && $level <= 6) {
            return 'C';
        }
        return null;
    }

}
