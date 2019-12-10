<?php
$a=-23;
$b=6;
$c=-22;
$delta=($b*$b)-(4*$a*$c);
if ($delta<0) 
    {
    echo "Brak miejsc zerowych";
    }
    else if($delta==0) {
        $x0=-$b/(2*$a);
        echo $x0;
    }
echo $delta. "<br>";
?>