<?php

namespace Domain;

/**
 *
 */
class User
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var Long
     */
    private $id;

    /**
     * @var String
     */
    private $fullName;

    /**
     * @var String
     */
    private $gender;

    /**
     * @var String
     */
    private $birthDate;

    /**
     * @var String
     */
    private $email;

    /**
     * @var String
     */
    private $password;

    /**
     * @var \Domain\Address
     */
    private $address;

    /**
     * @var Boolean
     */
    private $verifyAccount;


    /**
     * @param String $email
     * @param String $pass
     * @return Boolean
     */
    public function login(String $email, String $pass):Boolean
    {
        // TODO: implement here
        return null;
    }

    /**
     * @return Void
     */
    public function editPerfil():Void
    {
        // TODO: implement here
        return null;
    }

    /**
     * @return Void
     */
    public function sendInvite():Void
    {
        // TODO: implement here
        return null;
    }

}
