<?php 

require_once '../control/core.php' ; 

$VarLivre		 	="";
$VarAuteur 	 		="";
$VarPrixUnitaire 	="";
$VarTitre 			="";
$VarActif 	 		="";

if (isset($_POST['LIVRE'])){
	$VarLivre=$_POST['LIVRE'];
	
}

$Livres=Model::load("livres");
$Livres->id=$VarLivre;
$Livres->read();

if(isset($Livres->data[0]->livreID)){
	$VarLivre 			=$Livres->data[0]->livreID;
	$VarAuteur 	 		=$Livres->data[0]->auteur;
	$VarPrixUnitaire 	=$Livres->data[0]->prix_unitaire;
	$VarTitre 			=$Livres->data[0]->titre;
	$VarActif 	 		=$Livres->data[0]->actif;
}

$monFormulaire = new Form('Formulaire','post','page4.php');

$monFormulaire->addText('Auteur :','AUTEUR','AUTEUR','',false,'Entrez ici votre auteur',$VarAuteur);
$monFormulaire->addText('Titre :','TITRE','TITRE','',false,'Entrez ici votre titre',$VarTitre);
$monFormulaire->addText('Prix :','PRIX_UNITAIRE','PRIX_UNITAIRE','',false,'Entrez ici votre prix',$VarPrixUnitaire);
$monFormulaire->addCheckbox('Actif :','ACTIF','ACTIF',$VarActif);
$monFormulaire->addSubmit('VALIDER','Valider');
echo $monFormulaire->getForm();
?>
