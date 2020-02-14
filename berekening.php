<?php
$tempo = "3.15"; # min.seconden
$afstand = 1000; # aantal meter

###

$stukken = $afstand / 100;
if(preg_match("/(\d+)\.(\d+)/", $tempo, $split)==true) {
    $seconden = (int) $split[2] + ((int)$split[1] * 60);    
}
else {
    $seconden = (int) $tempo;
}
echo $seconden / $stukken;
?>
