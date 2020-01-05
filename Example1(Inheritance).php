<?php

class Car {
    private $run = ' 220 km/h';
    private $createMotor = ' get motor';

    public function drive()
    {
        return $this->run;
    }

    public function createMotor()
    {
        return $this->createMotor;
    }
}

class passengerCar extends Car {
    public $bodyCar = 'body Porsche';

    public function createBody()
    {
        return $this->bodyCar;
    }
}

$fabric = new passengerCar();

echo $fabric->createBody();
echo $fabric->createMotor();
echo $fabric->drive();