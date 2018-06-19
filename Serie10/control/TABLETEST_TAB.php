<?php 
require_once '../control/core.php' ;

$VarPrenom 	 ="";
$where		 ="";
if (isset($_POST['PRENOM'])){
	$VarPrenom=$_POST['PRENOM'];
	if($where!=""){
		$where.=" and ";
	}
	$where.=" upper(prenom)  like upper('%".$VarPrenom."%' )";
}

if(Control_util::isAjax()){
$monFormulaire = new Form('FormTABLETEST_TAB','post','?');
	$monFormulaire->addText('Prénom :','PRENOM','PRENOM',$VarPrenom,false,'Entrez ici le prénom recherché');
	// $monFormulaire->addSubmit('VALIDER','Valider');
	echo $monFormulaire->getForm();
}
if(Control_util::isAjax()){
	$monFormulaire2 = new Form('NewTABLETEST_TAB','post','utilisateurs_fic.php');
	$monFormulaire2->addSubmit('VALIDER','Ajouter un utilisateur');
	echo $monFormulaire2->getForm();
}
$Utilisateurs=Model::load("utilisateurs");
$Utilisateurs->read(null,$where); 
require '../vue/TABLETEST_TAB.php' ;
?>
