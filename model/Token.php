<?php

namespace Domain;

/**
 *
 */
class Token
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var int
     */
    const EXPIRATION;

    /**
     * @var Long
     */
    private $id;

    /**
     * @var String
     */
    private $token;

    /**
     * @var \Domain\User
     */
    private $user;

    /**
     * @var Date
     */
    private $expireDate;


}
