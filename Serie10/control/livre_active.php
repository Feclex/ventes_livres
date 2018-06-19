<?php

require_once '../control/core.php' ;

if( isset($_POST['livreID'])){
    $tmp_utilisateur=Model::load("livres");
    $tmp_utilisateur->livre_active($_POST['livreID']);
    echo '1';
}else{
    echo '0';
}
?>