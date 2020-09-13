<?php

class Car
{
    protected $price;
    protected $yearsOld;
    protected $doors;

    function __construct() {
        $this->price = 1;
        $this->yearsOld = 1;
        $this->doors = 1;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setYearsOld($yearsOld) {
        $this->yearsOld = $yearsOld;
    }

    public function getYearsOld() {
        return $this->yearsOld;
    }

    public function setDoors($doors) {
        $this->doors = $doors;
    }

    public function getDoors() {
        return $this->doors;
    }

    private function multiplyValues() {
        return $this->price * $this->yearsOld * $this->doors;
    }

    public function getValuesMultiplied() {
        return $this->multiplyValues();
    }    
}

$car = new Car();
$car->setPrice(10000);
$car->setDoors(4);

echo "
Class Car <br />
Price: ".$car->getPrice()." <br />
Years Old: ".$car->getYearsOld()." <br />
Doors: ".$car->getDoors()." <br />
Values multiplied: ".$car->getValuesMultiplied()." <br />
";

?>