<?php 
require_once '../control/core.php' ;
?>


<?php 

$VarAuteur 	 ="";
$VarTitre = "";
$where		 ="";
if (isset($_POST['AUTEUR'])){
	$VarAuteur=$_POST['AUTEUR'];
	if($where!=""){
		$where.=" and ";
	}
	$where.=" upper(auteur)  like upper('%".$VarAuteur."%' )";
}


if(Control_util::isAjax()){
	$monFormulaire = new Form('FormTABLE_LIVRE','post','?');
		$monFormulaire->addText('Auteur :','AUTEUR','AUTEUR',$VarAuteur,false,'Entrez ici l\'auteur recherché');
		// $monFormulaire->addSubmit('VALIDER','Valider');
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