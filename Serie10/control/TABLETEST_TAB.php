<?php 
require_once '../control/core.php' ;
?>


<?php 

$VarPrenom 	 ="";
$VarNom = "";
$where		 ="";
if (isset($_POST['PRENOM'])){
	$VarPrenom=$_POST['PRENOM'];
	if($where!=""){
		$where.=" and ";
	}
	$where.=" upper(prenom)  like upper('%".$VarPrenom."%' )";
}

$monFormulaire = new Form('Formulaire','post','?');

$monFormulaire->addText('Prénom :','PRENOM','PRENOM',$VarPrenom,false,'Entrez ici le prénom recherché');
if (isset($_POST['NOM'])){
	$VarNom=$_POST['NOM'];
	if($where!=""){
		$where.=" and ";
	}
	$where.=" upper(nom)  like upper('%".$VarNom."%' )";
}

$monFormulaire->addText('Nom :','NOM','NOM',$VarNom,false,'Entrez ici le nom recherché');
$monFormulaire->addSubmit('VALIDER','Valider');
echo $monFormulaire->getForm();

$Utilisateurs=Model::load("utilisateurs");
$Utilisateurs->read(null,$where);


require '../vue/TABLETEST_TAB.php' ;



?>



