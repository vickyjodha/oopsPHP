<?php 
class Car {
    public function StartCar(){
        echo "Car Start now this";
    } 
    public function NEwdata(){
        self::StartCar();
    }
}

class SportCar extends Car{
    public function StartCar(){
        echo "Sport Car overrideing this data";
    }
    public function newParent(){
        parent::NEwdata();
    }
}

// Call method now 
$data = new SportCar();
// $data = new Car();
$data->newParent();
$data->StartCar();
?>