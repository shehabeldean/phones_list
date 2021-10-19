<?php 

namespace App\Repositories\ORM;

use App\Repositories\Contracts\CountryRepositoryInterface;
use App\Repositories\ORM\Models\Country;

class CountryRepository extends AbstractORMRepository implements CountryRepositoryInterface{

    public function __construct()
    {
        $this->query = new Country();
    }

}