<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Quotation extends Model
{
    public function customer() {
        return $this->belongsTo(Customer::class);      
    }
    
    protected $fillable =[
        'id',
        'user_type',
        'edificie_quantity',
        'edifice_name',
        'email',
        'phone',
        'commune_id',
        'customer_id',
    ];
    
}
