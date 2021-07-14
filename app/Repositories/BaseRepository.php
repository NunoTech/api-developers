<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BaseRepository
{

    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        $model = $this->model->find($id);
        if(!$model)
            return throw new ModelNotFoundException();
        return $model;

    }

    public function create($attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($attributes, $id)
    {
        $model = $this->model->find($id);
        if(!$model)
            return throw new ModelNotFoundException();
        return $model;

    }
    public function destroy($id)
    {
        $model = $this->model->find($id);

        if(!$model){
            throw new ModelNotFoundException();
        }
        return $model->delete();
    }

}
