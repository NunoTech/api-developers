<?php


namespace App\Services\Developers;


use App\Repositories\Developers\UsersRepositoryInterface;

class UsersService implements UsersServiceInterface
{
    protected $usersRepository;
    public function __construct(UsersRepositoryInterface $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->usersRepository->getAll();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id)
    {

    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {

            return $this->usersRepository->create($attributes);
    }

    /**
     * @param array $attributes
     * @param int $id
     * @return mixed
     */
    public function update(array $attributes, int $id)
    {

    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {

    }
}
