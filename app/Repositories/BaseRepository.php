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

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        $model = $this->model->find($id);
        if(!$model)
            return throw new ModelNotFoundException();
        return $model;
    }

    /**
     * @param array $attributes
     * @return mixed
     */

    public function create(array $attributes)
    {

        return $this->model->create($attributes);
    }

    /**
     * @param array $attributes
     * @param int $id
     * @return mixed
     */
    public function update(array $attributes, int $id)
    {
        $model = $this->model->find($id);
        if(!$model)
            return throw new ModelNotFoundException();
        return $model;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function destroy(int $id)
    {
        $model = $this->model->find($id);

        if(!$model){
            throw new ModelNotFoundException();
        }
        return $model->delete();
    }

}
