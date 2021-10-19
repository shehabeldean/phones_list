<?php

namespace App\Repositories\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer_view";

    public function country(){
        return $this->belongsTo(Country::class , "country_code", "code" );
    }

    public function getIsPhoneValidAttribute(){
        return $this->isPhoneValid();
    }

    private function isPhoneValid(){
        $reg  = $this->country->reg; // country regex
        return preg_match("/$reg/" , $this->phone);
    }

}
