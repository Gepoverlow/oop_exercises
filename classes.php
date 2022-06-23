<?php

declare(strict_types=1);

class Beverage {

    private string $color;
    private float $price;
    private string $temperature;


    function __construct(string $color, float $price,){

    $this->color = $color;
    $this->price = $price;
    $this->temperature = "Cold";
    }

    function getBeverageInfo(){

     return "This beverage is $this->temperature and $this->color.";

    }

    function setColor($newColor){

    $this->color = $newColor;
    
    }

    function getColor(){

    return $this->color; 

    }

}

class Beer extends Beverage{

    private string $name;
    private float $alcoholPercentage;

    function __construct(string $color, float $price, string $name, float $alcoholPerc){

    parent::__construct($color, $price);
    $this->name = $name;
    $this->alcoholPercentage = $alcoholPerc;

    }

    function getAlcoholPercentage(){

    return $this->alcoholPercentage;

    }

    function beerInfo(){

    return "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a " . $this->getColor() . " color."; 
        
    }

}





