<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Region;

class Province extends Model
{
    public function region_id()
    {
        return $this->belongsTo(Region::class);
    }
    protected $fillable =[
        'id',
        'name',
        'region_id',
  
    ];
}
