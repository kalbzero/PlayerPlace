<?php

namespace Domain;

/**
 *
 */
class Place
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
    private $name;

    /**
     * @var \Domain\Address
     */
    private $address;


    /**
     * @param String $name
     * @return List<String>
     */
    public function searchPlace(String $name):List<String>
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param String $name
     * @return List<String>
     */
    public function searchPlayer(String $name):List<String>
    {
        // TODO: implement here
        return null;
    }

}
