<?php

namespace Service;

/**
 *
 */
class AdminService
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var \Repository\PlaceRepository
     */
    private $placeRepository;

    /**
     * @var \Repository\UserRepository
     */
    private $userRepository;

    /**
     * @param Long $id
     * @return Boolean
     */
    public function deactivateUser(Long $id):Boolean
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param Long $id
     * @return Boolean
     */
    public function deactivatePlace(Long $id):Boolean
    {
        // TODO: implement here
        return null;
    }
}
