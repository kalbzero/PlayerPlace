<?php

namespace Domain;

/**
 *
 */
class Address
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var String
     */
    private $street;

    /**
     * @var Integer
     */
    private $number;

    /**
     * @var String
     */
    private $neighborhood;

    /**
     * @var String
     */
    private $city;

    /**
     * @var String
     */
    private $state;

    /**
     * @var String
     */
    private $region;

    /**
     * @var String
     */
    private $country;

    /**
     * @var String
     */
    private $zip;

    /**
     * @return String
     */
    public function getFullAddress():String
    {
        // TODO: implement here
        return null;
    }

    /**
     * @return String
     */
    public function getPlaceAddress():String
    {
        // TODO: implement here
        return null;
    }
}
