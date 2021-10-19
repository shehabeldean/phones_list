<?php 
namespace App\Repositories\Contracts;

interface RepositoryInterface{
    public function getAll();
    public function findById($id);
    public function addWith($relationName);
    public function paginate($number);
}