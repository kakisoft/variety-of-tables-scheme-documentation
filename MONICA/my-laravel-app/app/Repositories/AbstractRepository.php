<?php

namespace App\Repositories;

use Exception;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $model;

    abstract public function getModelClass(): string;

    public function __construct($target_object = null)
    {
        if( is_null($target_object) ){
            $this->model = app($this->getModelClass());

        }else{
            $this->model = $target_object;
        }
    }
}
