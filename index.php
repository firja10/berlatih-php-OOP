<?php

require 'animal.php';
require 'Ape.php';
require 'Frog.php';


$sheep = new Animal("shaun");

//echo $sheep->name;
// "shaun"

//echo $sheep->legs; // 2
//echo $sheep->cold_blooded;// false


echo $sheep->getName(); //"shaun"
echo "<br>";
$sheep ->setLegs(2);
echo $sheep->getLegs();// false
echo"<br>"; 
echo $sheep->getBlood(); // 2
 
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

echo "<br>"; 

$sungokong = new Ape("kera sakti");
echo $sungokong->yell() ;// "Auooo"
echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->jump() ; // "hop hop"





?>