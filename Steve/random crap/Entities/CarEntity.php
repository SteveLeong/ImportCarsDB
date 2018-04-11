<?php

class CarEntity{
    public $vin;
    public $price;
    public $type;
    public $year;
    public $mileage;
    public $model;
    public $image;

    function __construct($vin, $price, $type, $year, $mileage, $model, $image){
        $this->vin = $vin;
        $this->price = $price;
        $this->type = $type;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->model = $model;
        $this->image = $image;
    }
}

?>