<?php


abstract class Highway
{

    //Attributs
    /**
     * @currentVehicules array
     */
    protected $currentVehicules;

    /**
     * @nbLine int
     */
    protected $nbLines;

    /**
     * @maxSpeed int
     */
    protected $maxSpeed;

    //methods

    public function __construct()
    {
    }

    public function getCurrentVehicules():array
    {
        return $this->CurrentVehicules;
    }

    public function setCurrentVehicules($vehicule):Highway
    {
        $this->currentVehicules[] = $vehicule;
        return $this;
    }

    public function getNbLines():int
    {
        return $this->nbLines;
    }

    public function setNbLines(int $nb):Highway
    {
        $this->nbLines = $nb;
        return $this;
    }

    public function getMaxSpeed():int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $speed):Highway
    {
        $this->maxSpeed = $speed;
        return $this;
    }

    abstract protected function addVehicule($vehicule);

}