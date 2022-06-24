<?php

declare(strict_types=1);

class Beverage {

    protected string $color;
    private float $price;
    private string $temperature;


    function __construct(string $color, float $price,){

    $this->color = $color;
    $this->price = $price;
    $this->temperature = "Cold";
    }

    public function getBeverageInfo() : string{

     return "This beverage is $this->temperature and $this->color.";

    }

    public function setColor( string$newColor){

    $this->color = $newColor;
    
    }

    public function getColor() : string{

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

    public function getAlcoholPercentage() : float{

    return $this->alcoholPercentage;

    }

    private function getBeerInfo() : string{

    return "Hi i'm $this->name and have an alcochol percentage of $this->alcoholPercentage and I have a $this->color color."; 
        
    }

    public function printBeerInfo() : string {

    return $this->getBeerInfo();

    }

}








