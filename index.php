<?php 

require 'PHPOO.php';

$toxizap = new Pokemon("Toxizap");
$toxizap->Potion();

$persian = new Pokemon("Persian");
//$persian->Soin();
$persian->pv = 10;
$toxizap->attaque($persian);

if($persian->KO()){
    echo 'Persian est KO :\'(';
}else{
    echo 'Persian a survécu, il lui reste ' . $persian->pv . 'pv.';
}

var_dump($toxizap);
var_dump($persian);

?>