
<?php 
$monFormulaire = new formlogin('Formulaire','post','../control/login.php');
$monFormulaire->addText('Email :','UTILISATEUR','UTILISATEUR','',true,'nom.prenom@fournisseur.be');
$monFormulaire->addPassword('Mot de passe :','MDP','MDP','',true,'Entrez ici votre nom');
$monFormulaire->addSubmit('VALIDER','Valider');

?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Déjà enregistré?</br>Connectez-vous!</h1>
            <div class="account-wall">
                <img class="img-responsive" src="../vue/images/login.png"
                    alt="">
                     <?php  echo $monFormulaire->getForm(); ?>
                        
             
            </div>
           
        </div>
    </div>
</div>