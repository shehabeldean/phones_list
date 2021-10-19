<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListCustomersRequest;
use App\Repositories\Contracts\CountryRepositoryInterface;
use App\Repositories\Contracts\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    public function index(ListCustomersRequest $request , CustomerRepositoryInterface $customersRepo , CountryRepositoryInterface $countriesRepo){
        $customers = $customersRepo
            ->addWith('country')
            ->filterByCountry($request->countryId)
            ->getAll(10);
        $customers = $this->applyValidPhoneFilter($customers , $request->validPhone);
        $countries = $countriesRepo->getAll();
        $filters = $request->all();
        return view('phones' , compact('customers','countries','filters'));
    }

    private function applyValidPhoneFilter($customers , $phoneValidity){
        if($phoneValidity !== null && $phoneValidity != "all")
            $customers = $customers->where('isPhoneValid',$phoneValidity);

        return $customers;
    }
}
