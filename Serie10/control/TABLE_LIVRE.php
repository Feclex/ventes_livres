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

$monFormulaire = new Form('Formulaire','post','?');

$monFormulaire->addText('Auteur :','AUTEUR','AUTEUR',$VarAuteur,false,'Entrez ici l\'auteur recherché');
if (isset($_POST['TITRE'])){
	$VarTitre=$_POST['TITRE'];
	if($where!=""){
		$where.=" and ";
	}
	$where.=" upper(titre)  like upper('%".$VarTitre."%' )";
}

$monFormulaire->addText('Titre :','TITRE','TITRE',$VarTitre,false,'Entrez ici le titre recherché');
$monFormulaire->addSubmit('VALIDER','Valider');
echo $monFormulaire->getForm();

$ventelivres=Model::load("livres");
$ventelivres->read(null,$where);


require '../vue/page4.php' ;



?>

