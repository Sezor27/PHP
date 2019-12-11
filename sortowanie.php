<?php
$tab = array('Adam','Maks','Adrian','Jan');
for ($i=0; $i < count($tab)-1; $i++){
	for ($j=0; $j< count($tab)-1; $j++){
		if ($tab[$j]>$tab[$j+1]){
			$komorka = $tab[$j];
			$tab[$j]=$tab[$j+1];
			$tab[$j+1]=$komorka;
		}
	}
}
for ($i=0;$i < count($tab)-1; $i++){
print_r($tab[$i]."<br>");
}
?>
