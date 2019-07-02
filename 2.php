<?php
 
abstract class Vehicle
{
	public $driver;
	public $passenger;
	public $whels;
	public $engine;
	public $transmission;
}
 
class Car extends Vehicle
{
	$driver = '1';
	$passenger = '4';
	$whels = '4';
	$engine = '1';
}
 
class Truck extends Vehicle
{
	$driver = '1';
	$passenger = '2';
	$whels = '4';
	$engine = '1';
}
 
class Bicycles extends Vehicle
{
	$driver = '1';
	$passenger = '1';
	$whels = '2';
	$engine = '1';
}

class Motorcycles extends Vehicle
{
	$driver = '1';
	$whels = '2';
}

abstract class FactoryAbstract
{
	public function create($type)
		{
        	switch ($type) {
             	case'A':
                	return new Car();
             	case'B':
					return new Truck();
				case'C':
					return new Bicycles();
				case'D':
					return new Motorcycles();    
        }
    }
}
 
class Factory extends FactoryAbstract
{
}

$factory = new Factory();
$Car = $factory->create('A');
$Truck = $factory->create('B');
?>