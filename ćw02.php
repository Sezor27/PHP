<?php
$a=7;
$b=6;
if ($a>$b) {
			echo "A jest większe od B";
			}
					else if ($a<$b){
							echo "A jest mniejsze od B";
							}
							else {
									echo "liczby sa rowne";
									}
$wynik=($a>$b)?"A jest większe od B":"A jest mniejsze od B";
echo "<br>".$wynik;
$wynik2=($a%2==0)?"liczba A jest parzysta":"Liczba A jest nieparzysta";
echo "<br>".$wynik2;


?>
