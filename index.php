<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bicycle("blue", 1);
$bike->forward();
var_dump($bike);


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow', 1);


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black', 1);
$tornado->forward();

// instanciation d'une nouvelle voiture
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
echo '<br>';
var_dump(Car::ALLOWED_ENERGIES);

//instanciation d'un nouveau camion
$truckScania = new Truck('white', 2, 'fuel', 300);
$truckScania->setTruckLoad(200);
$truckScania->setCapacityLevel();
echo 'Etat du chargement du camion: '. $truckScania->getCapacityLevel(). " cf. chargement : ".$truckScania->getTruckLoad()." / capacité: ".$truckScania->getStorageCapacity();
echo '<br>';
$truckScania->forward();
$truckScania->brake();
$truckScania->setTruckLoad(100);
echo 'Etat du chargement du camion: '. $truckScania->getCapacityLevel(). " cf. chargement : ".$truckScania->getTruckLoad()." / capacité: ".$truckScania->getStorageCapacity();
echo '<br>';
var_dump($truckScania);

$residentialWay3 = new ResidentialWay();
var_dump($residentialWay3);
$motorWay1 = new MotorWay();
var_dump($motorWay1);
$pedestrianWay2 = new PedestrianWay();
var_dump($pedestrianWay2);
$motorWay1->addVehicule($truckScania);
$motorWay1->addVehicule($car);
var_dump($motorWay1);


$tornado->switchOn();
$car->switchOff();

$HomerCar = new Car('orange', 2, 'fuel');
var_dump($HomerCar);
try {
    $HomerCar->start();
} catch (Exception $e) {
    echo "Exception received : ". $e->getMessage();
    echo "<br/>";
    $HomerCar->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}

var_dump($HomerCar);
