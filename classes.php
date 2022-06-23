<?php

declare(strict_types=1);

class Beverage {

    public string $color;
    public float $price;
    public string $temperature;


    function __construct(string $color, float $price){

    $this->color = $color;
    $this->price = $price;
    $this->temperature = "Cold";
    }

    function getBeverageInfo(){

     echo "This beverage is $this->temperature and $this->color.";

    }

}





