<?php 
	session_start(); 

	require_once '../control/Utilisateur.php';
	require_once '../vue/form.php';
	require_once '../vue/formlogin.php';
	require_once '../model/model.php';

	if(!isset($_SESSION['UTILISATEUR_NOM']) && !strpos($_SERVER['REQUEST_URI'], '/control/login.php') ){
    	header("Location: ../control/login.php");
	}
?>
