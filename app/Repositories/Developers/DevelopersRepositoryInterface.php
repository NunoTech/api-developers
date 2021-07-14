<?php


namespace App\Repositories\Developers;


interface DevelopersRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param $attributes
     * @return mixed
     */
    public function create($attributes);

    /**
     * @param $attributes
     * @param $id
     * @return mixed
     */
    public function update($attributes, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);
}
