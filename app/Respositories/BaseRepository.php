<?php

namespace App\Respositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;
    private $relations = [];

    public function __construct(Model $model, array $relations = [])
    {
        $this->model = $model;
        $this->relations = $relations;
    }

    public function all(int $page=15)
    {
        $query = $this->model->latest();

        return $query->paginate($page);
    }

    public function getById(Model $model) : Model
    {

        if (!empty($this->relations)) {
            $model = $model->with($this->relations);
        }
        return $model;
    }

    public function updateModel(Model $model)
    {
        
    }


    public function deleteModel(Model $model)
    {
        return $model->delete();
    }
    
}