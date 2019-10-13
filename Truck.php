<?php

// Truck.php
require_once 'Vehicule.php';

class Truck extends Vehicule
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    //attributs

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $truckLoad;

    /**
     * @var string
     */
    private $capacityLevel;

    //methods

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
        $this->truckLoad = 0;
    }

    public function setStorageCapacity(int $storageCapacity) : Truck
    {
        $this->storageCapacity = $storageCapacity;
        return $this;
    }

    public function getStorageCapacity(): int {
        return $this->storageCapacity;
    }

    public function setTruckLoad(int $truckLoad) : Truck
    {
        if (($this->truckLoad + $truckLoad) <= $this->storageCapacity) {
            $this->truckLoad += $truckLoad;
            $this->setCapacityLevel();
        }
        return $this;
    }

    public function getTruckLoad(): int {
        return $this->truckLoad;
    }

    public function setCapacityLevel(): Truck
    {
        if ($this->truckLoad < $this->storageCapacity) {
            $this->capacityLevel = "in filling";
         } else {
            $this->capacityLevel = "full";
            }
        return $this;
    }

    public function getCapacityLevel() : string
    {
        return $this->capacityLevel;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


}