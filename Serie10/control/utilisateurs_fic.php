<?php 

require_once '../control/core.php' ; 

$VarUtilisateur 	="";
$VarCode 	 		="";
$VarPrenom 	 		="";
$VarNom 	 		="";
$VarAdministrateur 	="";
$VarActif 	 		="";

if (isset($_POST['UTILISATEUR'])){
	$VarUtilisateur=$_POST['UTILISATEUR'];
	
}

$Utilisateurs=Model::load("utilisateurs");
$Utilisateurs->id=$VarUtilisateur;
$Utilisateurs->read();

if(isset($Utilisateurs->data[0]->utilisateur)){
	$VarUtilisateur 	=$Utilisateurs->data[0]->utilisateur;
	$VarCode 	 		=$Utilisateurs->data[0]->code;
	$VarPrenom 	 		=$Utilisateurs->data[0]->prenom;
	$VarNom 	 		=$Utilisateurs->data[0]->nom;
	$VarAdministrateur 	=$Utilisateurs->data[0]->admin;
	$VarActif 	 		=$Utilisateurs->data[0]->actif;
}

$monFormulaire = new Form('Formulaire','post','page5.php');
$monFormulaire->addText('Utilisateur :','UTILISATEUR','UTILISATEUR','',false,'Entre ici votre utilisateur',$VarUtilisateur);
$monFormulaire->addPassword('Mot de passe :','CODE','CODE','',false,'Entre ici votre mot de passe',$VarCode);
$monFormulaire->addText('Prénom :','PRENOM','PRENOM','',false,'Entrez ici votre prénom',$VarPrenom);
$monFormulaire->addText('Nom :','NOM','NOM','',false,'Entrez ici votre nom',$VarNom);
$monFormulaire->addCheckbox('Administrateur :','ADMINISTRATEUR','ADMINISTRATEUR',$VarAdministrateur);
$monFormulaire->addCheckbox('Actif :','ACTIF','ACTIF',$VarActif);
$monFormulaire->addSubmit('VALIDER','Valider');
echo $monFormulaire->getForm();
?>
