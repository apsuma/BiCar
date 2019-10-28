<?php

require_once 'Highway.php';

final class PedestrianWay extends Highway
{

    protected $nbLines = 1;
    protected $maxSpeed = 10;

    public function addVehicule($vehicule)
    {
        if (($vehicule instanceof Bicycle) || ($vehicule instanceof  Skateboard)) {
            $this->setCurrentVehicules($vehicule);
            return $this;
        }
    }
}