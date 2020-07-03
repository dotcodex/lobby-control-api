<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Diagnostic extends Model
{
    public function customer() {
        return $this->belongsTo(Customer::class);      
    }

    protected $fillable =[
        'id',
        'score',
        'commune_id',
        'customer_id',
    ];
}
