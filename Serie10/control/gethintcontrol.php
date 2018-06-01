<?php 

require_once '../control/core.php' ;


$ventelivres=Model::load("utilisateurs");
$ventelivres->read(null," upper(prenom)  like upper('%".$_GET['PRENOM']."%' )"); 


require '../vue/js/gethint.php';
?>