<?php 
namespace App\Repositories\Contracts;

interface CustomerRepositoryInterface extends RepositoryInterface{
    public function filterByCountry($countryId);
}