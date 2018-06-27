<?php

namespace Controller;

/**
 *
 */
class UserController
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var \Service\UserService
     */
    private $userService;


    /**
     * @return String
     */
    public function home():String
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param Long $id
     * @return String
     */
    public function viewUser(Long $id):String
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param \Domain\User $user
     * @return String
     */
    public function editUser(\Domain\User $user):String
    {
        // TODO: implement here
        return null;
    }

    /**
     * @return List<String>
     */
    public function listUser():List<String>
    {
        // TODO: implement here
        return null;
    }

    /**
     * @return String
     */
    public function deleteUser():String
    {
        // TODO: implement here
        return null;
    }

    /**
     * @return String
     */
    public function verifyAccount():String
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param String $email
     * @return Void
     */
    public function sendInvite(String $email):Void
    {
        // TODO: implement here
        return null;
    }
}
