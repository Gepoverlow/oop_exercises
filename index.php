<?php


if(isset($_GET['page'])){
    switch($_GET['page']) {
        case 'classes' :
            require 'classes.php';
            // Exercise One:
            // $drink = new Beverage("Black", 2);
            // echo $drink->getBeverageInfo();

            //Exercise Two:
            // $duvel = new Beer("Blonde", 3.5, "Duvel", 8.5);
            // echo $duvel->getAlcoholPercentage();
            // echo "<br/>" . $duvel->alcoholPercentage;
            // echo "<br/>" . $duvel->getBeverageInfo();

            //Exercise Three:
             $duvel = new Beer("Blonde", 3.5, "Duvel", 8.5);
            echo $duvel->getAlcoholPercentage();
            echo "<br/>" . $duvel->getBeverageInfo();
            $duvel->setColor("light");
            echo "<br/>" . $duvel->getBeverageInfo();
            echo "<br/>" . $duvel->beerInfo();
            break;
        case 'extending' :
            require 'extending.php';
            break;
        default :
            echo 'hmmm give me a page sicco';
    };
}

