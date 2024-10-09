<?php

namespace App\Respositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(int $page=15)
    {
        $query = $this->model->latest();

        return $query->paginate($page);
    }

    public function getById(int $id) : Model
    {
        $model = $this->model->find($id);
        return $model;
    }
    
}