<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer_view";

    public function country(){
        return $this->belongsTo(Country::class , "country_code", "code" );
    }

    public function is_phone_valid(){
        $reg  = $this->country->reg; // country regex
        return preg_match("/$reg/" , $this->phone);
    }

}
