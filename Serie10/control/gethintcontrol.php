<?php 

require_once '../control/core.php' ;


$ventelivres=Model::load("utilisateurs");
$ventelivres->read(null," upper(prenom)  like upper('%".$_GET['PRENOM']."%' )"); 


require '../vue/assets/gethint.php';
?>