<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\ListCustomersRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(ListCustomersRequest $request){

        $customers = Customer::with('country');
        $customers = $this->applyCountryFilter($customers , $request->countryId);
        $customers = $this->applyValidPhoneFilter($customers , $request->validPhone);

        $countries = app(CountryController::class)->index();
        return view('phones' , compact('customers','countries'));
    }

    private function applyCountryFilter($customers , $countryId = null){
        
        if($countryId){
            $customers = $customers->whereHas('country' , function($q) use ($countryId) {
                $q->where('id',$countryId);
            });
        }
        return $customers->get();
    }

    private function applyValidPhoneFilter($customers , $phoneValidity){
        if($phoneValidity !== null)
            $customers = $customers->where('isPhoneValid',$phoneValidity);

        return $customers;
    }
}
