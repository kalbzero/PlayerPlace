<?php

namespace Service;

/**
 *
 */
class UserService
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var \Repository\UserRepository
     */
    private $userRepository;

    /**
     * @param \Domain\User $name
     * @return \Domain\User
     */
    public function findByName(\Domain\User $name):\Domain\User
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param Long $id
     * @return \Domain\User
     */
    public function getId(Long $id):\Domain\User
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param String $name
     * @return List<User>
     */
    public function findAllByName(String $name):List<User>
    {
        // TODO: implement here
        return null;
    }

    /**
     * @return List<User>
     */
    public function list():List<User>
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param \Domain\User $user
     * @return \Domain\User
     */
    public function save(\Domain\User $user):\Domain\User
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param \Domain\User $user
     * @return \Domain\User
     */
    public function update(\Domain\User $user):\Domain\User
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param Long $idUser
     * @return Boolean
     */
    public function delete(Long $idUser):Boolean
    {
        // TODO: implement here
        return null;
    }
}
