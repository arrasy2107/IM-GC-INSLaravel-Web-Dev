<?php
require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");
echo 'Name : ' . $sheep->name . "<br>"; // "shaun"
echo 'Legs : ' . $sheep->legs . "<br>"; // 4
echo 'Cold Blooded : ' . $sheep->cold_blooded . "<br>"; // "no"
echo "<br>";

$kodok = new Frog("buduk");
echo 'Name : ' . $kodok->name . "<br>"; // "buduk"
echo 'Legs : ' . $kodok->legs . "<br>"; // 4
echo 'Cold Blooded : ' . $kodok->cold_blooded . "<br>"; // "no"
echo 'Jump : ' . $kodok->jump() . "<br>"; // "hop hop"
echo "<br>";

$sungokong = new Ape("kera sakti");
echo 'Name : ' . $sungokong->name . "<br>"; // "kera sakti"
echo 'Legs : ' . $sungokong->legs . "<br>"; // 4
echo 'Cold Blooded : ' . $sungokong->cold_blooded . "<br>"; // "no"
echo 'Yell : ' . $sungokong->yell() . "<br>"; // "Auooo"
?>
