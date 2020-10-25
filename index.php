<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$bike->setCurrentSpeed(10);
echo '<br> Bike speed : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
// Moving bike
echo $bike->forward();
echo '<br> Bike speed : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Bike speed : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$car1 = new Car('blue','2','Electric');
$car2 = new Car('black','4', 'Diesel');

//moteur éteint
echo $car2->forward();
echo '<br> Car speed : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';

//Allumer le moteur
$car2->start(true);
echo $car2->forward();
echo '<br> Car speed : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->brake();
echo '<br> Car runs on \'' . $car2->getEnergy();
