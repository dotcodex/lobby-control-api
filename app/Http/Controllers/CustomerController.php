<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomers(){
        $customers = Customer::all();
        return response()->json(['data'=> $customers]);
    }
 
  

   
}
