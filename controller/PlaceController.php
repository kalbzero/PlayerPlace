<?php

namespace Controller;

/**
 *
 */
class PlaceController
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @var \Service\PlaceService
     */
    private $placeService;


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
    public function viewPlace(Long $id):String
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param \Domain\Place $place
     * @return String
     */
    public function editPlace(\Domain\Place $place):String
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param String $name
     * @return List<String>
     */
    public function listPlace(String $name):List<String>
    {
        // TODO: implement here
        return null;
    }

    /**
     * @param Long $idPlace
     * @param Long $idUser
     * @return String
     */
    public function deletePlace(Long $idPlace, Long $idUser):String
    {
        // TODO: implement here
        return null;
    }

    public function placeAction($params)
    {
        // Find the requested person in the database
        

        // Render the helloView view
        include 'view/map.php';
    }
}
