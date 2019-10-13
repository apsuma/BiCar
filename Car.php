<?php
// car.php

class Car
{
//attributs

    private $nbWheels = 4;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

//methodes

    public function __construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward() {
        $this->currentSpeed = 70;

        return "Vroooouuuuuuuuuum !";
    }

    public function brake() {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start() {
        $action = "Go !";
        return $action;
    }

    public function getNbWheels():integer {
        return $this->nbWheels;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): integer {
        return $this->nbSeats;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel(): integer {
        return $this->energyLevel;
    }
}