<?php
    require_once('Frog.php');
    require_once('Ape.php');

    //RELEASE 0
    
    echo "<h1>RELEASE 0</h1>";

    $sheep = new Animal("shaun");

    echo "Name : " . $sheep->getName() . "<br>"; // "shaun"
    echo "legs : " . $sheep->getLegs() . "<br>"; // 4
    echo "cold blooded : " . $sheep->getBlood() . "<br>"; // "no"

    //RELEASE 1

    echo "<h1>RELEASE 1</h1>";

    $sungokong = new Ape("kera sakti");
    echo "Name : " . $sungokong->getName() . "<br>";
    echo "legs : " . $sungokong->getLegs() . "<br>";
    echo "cold blooded : " . $sungokong->getBlood() . "<br>";
    echo "Yell : " . $sungokong->yell(); // "Auooo"

    echo "<br>";

    $kodok = new Frog("buduk");
    echo "Name : " . $kodok->getName() . "<br>";
    echo "legs : " . $kodok->getLegs() . "<br>";
    echo "cold blooded : " . $kodok->getBlood() . "<br>";
    echo "Jump : " . $kodok->jump() ; // "hop hop"
?>