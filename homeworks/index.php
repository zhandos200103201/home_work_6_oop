<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/homeworks/Car.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/homeworks/Engine.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/homeworks/Driver.php';

$_my_car = new Car("1st class",new Engine("Toyota motors", 400), new Driver("Zhandos", 1), "Lexus ls 600");
echo $_my_car;


