<?php
require_once 'Highway.php';

final class MotorWay extends Highway
{

    protected $nbLines = 4;
    protected $maxSpeed = 130;


    public function addVehicule($vehicule)
    {
        if (($vehicule instanceof Car) || ($vehicule instanceof Truck)) {
            $this->setCurrentVehicules($vehicule);
            return $this;
        }
    }
}