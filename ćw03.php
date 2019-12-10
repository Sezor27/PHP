
<?php
/* 

// petla for 
$suma=0;
for($x = 1; $x <=20; $x++ ){
    $losowa = rand(-7, 7);
    echo $losowa."<br>";
    $suma=$suma+$losowa;
}
echo "suma = " .$suma;
?>

<?php
// petla while
$i=1;
$suma=0;
$losowa=0;
while($losowa!=-5){
    $losowa = rand(-20, 20);
    $suma=$suma+$losowa;
    echo $losowa.' , ';
    $i++;
}
echo $suma. '<br>'. 'Przy ' .$i. ' pętlach';

*/
?>

<?php
/*
// petla while
$i=1;
$suma=0;
$losowa=0;
while($losowa!=-5){
    $losowa = rand(-20, 20);
    $suma=$suma+$losowa;
    echo $losowa.' , ';
    $i++;
}
echo $suma. '<br>'. 'Przy ' .$i. ' pętlach';
*/
?>

<?php
/*
 $tablica=array("Ola", 1, 2, 5, 1.25, "Ala");
 $l=count($tablica);
    for ($i=0;$i<$l;$i++)
        echo $tablica[$i]."<br>";
*/
/*
echo $tablica[0]. "<br>";
echo $tablica[1]. "<br>";
echo $tablica[2]. "<br>";
echo $tablica[3]. "<br>";
echo $tablica[4]. "<br>";
*/
$tablica= array(-6, 5, 3 , 7, -2 , 1, 2.7777);
    $suma=0;
for ($l=0;$l<count($tablica);$l++){
        $suma += $tablica[$l];
}
echo $suma. "<br>";


?>
