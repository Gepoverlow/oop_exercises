<?php


if(isset($_GET['page'])){
    switch($_GET['page']) {
        case 'classes' :
            require 'classes.php';
            // //Exercise One:
            // $drink = new Beverage("Black", 2);
            // echo $drink->getBeverageInfo();

            // //Exercise Two:
            // $duvel = new Beer("Blonde", 3.5, "Duvel", 8.5);
            // echo $duvel->getAlcoholPercentage();
            // echo "<br/>" . $duvel->getBeverageInfo();
            // echo "<br/>" . $duvel->alcoholPercentage;

            // //Exercise Three:
            // $duvel = new Beer("Blonde", 3.5, "Duvel", 8.5);
            // echo $duvel->getAlcoholPercentage();
            // echo "<br/>" . $duvel->getBeverageInfo();
            // $duvel->setColor("light");
            // echo "<br/>" . $duvel->getBeverageInfo();
            // echo "<br/>" . $duvel->printBeerInfo();

            // //Exercise Four:
            // $duvel = new Beer("Blonde", 3.5, "Duvel", 8.5);
            // echo $duvel->getAlcoholPercentage();
            // echo "<br/>" . $duvel->getBeverageInfo();
            // $duvel->setColor("light");
            // echo "<br/>" . $duvel->getBeverageInfo();
            // echo "<br/>" . $duvel->printBeerInfo();

            //Exercise Five:
            //  $drink = new Beverage("Black", 2);
            //  echo $drink->getBeverageInfo();
            //  echo "<br/>" . $drink->changePrice(-1);
            //  echo "<br/>" . $drink->getBeverageInfo();
            //  echo "<br/>" . $drink->changePrice(3.5);
            //  echo "<br/>" . $drink->getBeverageInfo();

            //Exercise Six:
            


            break;
        default :
            echo 'hmmm give me a page sicco';
    };
}

