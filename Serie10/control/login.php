<?php 
$Montitle= 'Connexion';
require '../control/core.php' ;

if(isset($_POST['UTILISATEUR']) && isset($_POST['MDP'])){

	if(Utilisateur::Authentification($_POST['UTILISATEUR'],$_POST['MDP'])) {
		$_SESSION['UTILISATEUR_NOM']=$_POST['UTILISATEUR'];
			$_SESSION['UTILISATEUR_OK']=true;

	
		header("Location: ../control/page1.php");
	}
}

require '../vue/haut.php' ;
require_once '../vue/login.php';
require '../vue/bas.php' ;
?>