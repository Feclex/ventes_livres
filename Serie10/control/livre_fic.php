<?php 
require_once '../control/core.php' ;

$VarLivre		 	="";
$VarAuteur 	 		="";
$VarPrixUnitaire 	="";
$VarTitre 			="";
$VarActif 	 		=0;
$VarMode 	 		="C";

$ventelivres=Model::load("livres");
$ventelivres->dump_sql=true;

/*SI je suis dans un mode, c'est que je dois effectuer une action DB*/
if(isset($_POST['MODE'])){

	$VarMode = "U";

	if(isset($_POST['TITRE'])){
		$VarAuteur 	= $_POST['TITRE'];	
	}
	if(isset($_POST['ACTIF'])){
		$VarActif 	= $_POST['ACTIF'];	
	}
	
	switch ($_POST['MODE']) {
		case 'C':
			$ventelivres->livre_create($_POST['TITRE'],$_POST['AUTEUR'],$_POST['PRIX'],$VarAuteur,$VarActif);
			break;
		case 'U':
			$ventelivres->livre_update($_POST['TITRE'],$_POST['AUTEUR'],$_POST['PRIX'],$VarAuteur,$VarActif);
		default;
		break;
	}	
}else{

	/* Je dois juste afficher l'utilisateur passé en paramètre*/
			if (isset($_POST['TITRE'])){
			$VarLivre=$_POST['TITRE'];
			$VarMode = "U";
			$ventelivres->id=$VarLivre;
			$ventelivres->read();
	
			if(isset($ventelivres->data[0]->titre)){
				$VarLivre 			=$ventelivres->data[0]->livreID;
				$VarAuteur 	 		=$ventelivres->data[0]->auteur;
				$VarPrixUnitaire 	=$ventelivres->data[0]->prix_unitaire;
				$VarTitre 			=$ventelivres->data[0]->titre;
				$VarActif 	 		=$ventelivres->data[0]->actif;
			}
		}
	/* Je dois juste afficher l'utilisateur passé en paramètre*/
	
}

$monFormulaire = new Form('Formulaire','post','livre_fic.php');
$monFormulaire->addHidden('MODE','MODE',$VarMode);
$monFormulaire->addText('Auteur :','AUTEUR','AUTEUR','',false,'Entrez ici votre auteur',$VarAuteur);
$monFormulaire->addText('Titre :','TITRE','TITRE','',false,'Entrez ici votre titre',$VarTitre);
$monFormulaire->addText('Prix :','PRIX_UNITAIRE','PRIX_UNITAIRE','',false,'Entrez ici votre prix',$VarPrixUnitaire);
$monFormulaire->addCheckbox('Actif :','ACTIF','ACTIF',$VarActif);
$monFormulaire->addSubmit('VALIDER','Valider');
echo $monFormulaire->getForm();
?>
