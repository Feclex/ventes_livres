<?php 
	$Montitle= 'Liste membres';
	require_once '../control/core.php' ;

		if(Control_util::isAjax()){
			require '../vue/haut.php' ;
			}
	
	require '../control/TABLETEST_TAB.php' ;

	if(Control_util::isAjax()){
		require '../vue/bas.php' ;
		}
?>

