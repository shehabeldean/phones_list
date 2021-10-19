<?php 

namespace App\Repositories\ORM;

use App\Repositories\Contracts\RepositoryInterface;

abstract class AbstractORMRepository implements RepositoryInterface{
    protected $query;
    protected $relations = [];

    public function getAll()
    {
        return $this->query->get();
    }

    public function findById($id){
        return $this->query->find($id);
    }

    public function addWith($relationName){
        array_push($this->relations , $relationName);
        $this->query = $this->query->with($this->relations);
        return $this;
    }

    public function paginate($recordsNumber){
        return $this->query->paginate($recordsNumber);
    }

}