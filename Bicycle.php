<?php

// Bicycle.php
require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicule implements LightableInterface
{
    public function switchOff(): bool
    {
        return false;
    }

    public function switchOn():bool
    {
        if ($this->currentSpeed > 10) {
            return true;
     }
    }
}