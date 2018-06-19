<?php 
	$Montitle= 'Liste livres';

	require_once '../control/core.php' ;

	
	if(Control_util::isAjax()){
		require '../vue/haut.php' ;
		}

		require '../control/TABLE_LIVRE.php' ;

if(Control_util::isAjax()){
	require '../vue/bas.php' ;
	}
?>