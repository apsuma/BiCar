<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("blue");
$bike->setCurrentSpeed( 0);
var_dump($bike);


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');
$tornado->forward();

// instanciation d'une nouvelle voiture
$car = new Car('blue', 7, 'electric');
var_dump($car);
echo $car->start();
echo $car->forward();
var_dump($car);
echo $car->brake();