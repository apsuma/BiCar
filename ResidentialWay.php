<?php

require_once 'Highway.php';

final class ResidentialWay extends Highway
{

    protected $nbLines = 2;
    protected $maxSpeed = 50;


    public function addVehicule($vehicule)
    {
    $this->setCurrentVehicules($vehicule);
            return $this;
    }

}