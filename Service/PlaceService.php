<?php

namespace Service;

/**
 *
 */
class PlaceService
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
     * @param String $name
     * @return \Domain\Place
     */
    public function findByName(String $name):\Domain\Place
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param Long $id
     * @return \Domain\Place
     */
    public function getId(Long $id):\Domain\Place
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param String $name
     * @return List<Place>
     */
    public function findAllByName(String $name):List<Place>
    {
        // TODO: implement here
        return null;
    }

    /**
     * @return List<Place>
     */
    public function list():List<Place>
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param \Domain\Place $place
     * @return \Domain\Place
     */
    public function save(\Domain\Place $place):\Domain\Place
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param \Domain\Place $place
     * @return \Domain\Place
     */
    public function update(\Domain\Place $place):\Domain\Place
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param Long $idPlace
     * @param Long $idUser
     * @return Boolean
     */
    public function delete(Long $idPlace, Long $idUser):Boolean
    {
        // TODO: implement here
        return null;
    }
}
