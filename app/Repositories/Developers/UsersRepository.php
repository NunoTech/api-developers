<?php


namespace App\Repositories\Developers;



use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;


class UsersRepository extends BaseRepository implements UsersRepositoryInterface
{
    protected $model;

    public function __construct(User $model)
    {
        parent::__construct($model);
        $this->model= $model;
    }

    /**
     * @return Collection
     */
    public function getAll()
    {
        return parent::getAll();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return parent::getById($id);
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return parent::create($attributes);
    }

    /**
     * @param array $attributes
     * @param int $id
     * @return mixed
     */
    public function update(array $attributes, int $id)
    {
        return parent::update($attributes, $id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function destroy(int $id)
    {
        return parent::destroy($id);
    }
}