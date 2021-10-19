<?php 

namespace App\Repositories\ORM;

use App\Repositories\ORM\Models\Customer;
use App\Repositories\Contracts\CustomerRepositoryInterface;

class CustomerRepository extends AbstractORMRepository implements CustomerRepositoryInterface{

    public function __construct()
    {
        $this->query = new Customer;
    }

    public function filterByCountry($countryId)
    {
        if($countryId){
            $this->query = $this->query->whereHas('country' , function($q) use ($countryId) {
                $q->where('country.id',$countryId);
            });
        }
        return $this;
    }

}