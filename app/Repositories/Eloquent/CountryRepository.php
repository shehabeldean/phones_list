<?php 

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\CountryRepositoryInterface;
use App\Repositories\Eloquent\Models\Country;

class CountryRepository extends AbstractEloquentRepository implements CountryRepositoryInterface{

    public function __construct()
    {
        $this->query = new Country();
    }

}