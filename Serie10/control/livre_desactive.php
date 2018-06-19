<?php

require_once '../control/core.php' ;

if(isset($_POST['livreID'])){
    $tmp_livre=Model::load("livres");
    $tmp_livre->livre_desactive($_POST['livreID']);
    echo '0';
}else{
    echo '1';
}
?>