<?php
$a=3;
$b=6;
$c=2;

function pole($a) 
    {
        $s=$a*$a*pi();
        return $s;
    }
    //pole koła
function obw($a)
    {
        $s=$a*2*pi();
        return $s;
    }
    //obwód koła
    echo round(obw($a),2), ("<br>"), round(pole($a),2), ("<br>");
?>