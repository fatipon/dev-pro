<?php

class Car
{
  public $vector = "stop";
  public $driver = true;

  public function movForvard()
  {
  	$this->vector = "forvard";
  }

  public function movBackward()
  {
    $this->vector = "backward";
  }

  public function leftTurn()
  {
  	$this->vector = "left";
  } 

  public function rightTurn()
  {
  	$this->vector = "right";
  }
}
$car = new Car;
echo $car->vector;
$car->movBackward();
echo $car->vector;

class Truck
{
  public $vector = "stop";
  public $driver = true;

  public function movForvard()
  {
  	$this->vector = "forvard";
  }

  public function movBackward()
  {
    $this->vector = "backward";
  }

  public function leftTurn()
  {
  	$this->vector = "left";
  } 

  public function rightTurn()
  {
  	$this->vector = "right";
  }
}
$Truck = new Truck;
echo $Truck->vector;
$Truck->leftTurn();
echo $Truck->vector;
class Motorcycles
{
  public $vector = "stop";
  public $driver = true;

  public function movForvard()
  {
  	$this->vector = "forvard";
  }

  public function movBackward()
  {
    $this->vector = "backward";
  }

  public function leftTurn()
  {
  	$this->vector = "left";
  } 

  public function rightTurn()
  {
  	$this->vector = "right";
  }
}
$Motorcycles = new Motorcycles;
echo $Motorcycles->vector;
$Motorcycles->rightTurn();
echo $Motorcycles->vector;

class Bicycle
{
  public $vector = "stop";
  public $driver = true;

  public function movForvard()
  {
  	$this->vector = "forvard";
  }

  public function movBackward()
  {
    $this->vector = "backward";
  }

  public function leftTurn()
  {
  	$this->vector = "left";
  } 

  public function rightTurn()
  {
  	$this->vector = "right";
  }
}
$Bicycle = new Bicycle;
echo $Bicycle->vector;
$Bicycle->rightTurn();
echo $Bicycle->vector;

class Human
{	
  public $vector = "stop";

  public function movForvard()
  {
  	$this->vector = "forvard";
  }

  public function movBackward()
  {
    $this->vector = "backward";
  }

  public function leftTurn()
  {
  	$this->vector = "left";
  } 

  public function rightTurn()
  {
  	$this->vector = "right";
  }
}
$Human = new Human;
echo $Human->vector;
$Human->rightTurn();
echo $Human->vector;

?>