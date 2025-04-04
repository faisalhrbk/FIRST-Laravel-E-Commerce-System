<?php

namespace App\Models;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $guarded = [];
    function vendor(){
        return $this->belongsTo(Vendor::class);
    }
}
