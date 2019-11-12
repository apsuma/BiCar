<?php
// car.php
require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Car extends Vehicule implements LightableInterface
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
     * @var bool
     */
    private $hasParkBrake = true;

//methodes

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn() : bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function setParkBrake(bool $go): void
    {
        $this->hasParkBrake = $go;
    }

    public function start():void
    {
        if ($this->hasParkBrake) {
            throw new Exception("frein à main activé");
        }
    }
}
