<?php
$a=4;
$b=6;
$c="tekst";
$suma=$a+$b;
$roznica=$a-$b;
$iloczyn=$a*$b;
$iloraz=$a/$b;
$modulo=$a%$b;

echo ("wynik dodawania = ".$suma."<br>");
echo ("wynik mnozenia = ".$iloczyn."<br>");
echo ("wynik odejmowania = ".$roznica."<br>");
echo ("wynik dzielenia = ".round($iloraz,3)."<br>");
echo ($modulo);



?>