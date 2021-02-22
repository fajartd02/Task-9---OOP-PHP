<?php
//Release 0
require 'animal.php';
$sheep = new Animal("shaun");
echo "<b>Release 0 </b><br>";
echo $sheep->name; // "shaun" 
echo "<br>";
echo $sheep->legs; // 2
echo"<br>";
echo $sheep->cold_blooded; // false
echo"<br>";
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded()

echo "<b>Release 1</b> <br>";
//Release 1
require 'Frog.php';
require 'Ape.php';
// index.php

//Ape
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
// echo $sungokong->legs;
// echo"<br>";

//Kodok
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
// echo $kodok->legs;

?>