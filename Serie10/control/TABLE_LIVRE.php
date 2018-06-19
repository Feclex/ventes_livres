<?php 
require_once '../control/core.php' ;

$VarTitre 	 ="";
$where		 ="";

if (isset($_POST['TITRE'])){
	$VarTitre=$_POST['TITRE'];
	if($where!=""){
		$where.=" and ";
	}
	$where.=" upper(TITRE)  like upper('%".$VarTitre."%')";
}

if(Control_util::isAjax()){
	$monFormulaire = new Form('FormTABLE_LIVRE','post','?');
		$monFormulaire->addText('titre :','TITRE','TITRE',$VarTitre,false,'Entrez ici le titre recherché');
		echo $monFormulaire->getForm();
	}
	
	if(Control_util::isAjax()){
		$monFormulaire2 = new Form('NewTABLE_LIVRE','post','livre_fic.php');
		$monFormulaire2->addSubmit('VALIDER','Ajouter un livre');
		echo $monFormulaire2->getForm();
	}
	$ventelivres=Model::load("livres");
	$ventelivres->read(null,$where); 

require '../vue/page4.php' ;
?>