<?php

declare(strict_types=1);

class Beverage {

    public string $color;
    public float $price;
    public string $temperature;


    function __construct(string $color, float $price,){

    $this->color = $color;
    $this->price = $price;
    $this->temperature = "Cold";
    }

    function getBeverageInfo(){

     return "This beverage is $this->temperature and $this->color.";

    }

}

class Beer extends Beverage{

    public string $name;
    public float $alcoholPercentage;

    function __construct(string $color, float $price, string $name, float $alcoholPerc){

    parent::__construct($color, $price);
    $this->name = $name;
    $this->alcoholPercentage = $alcoholPerc;

    }

    function getAlcoholPercentage(){

    return $this->alcoholPercentage;

    }

}





