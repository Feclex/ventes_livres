<head>
  <title>Liste livres</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<?php
$out = "";
$titre= '<tr>';
$titre_trt= false;

foreach($ventelivres->data as $key => $element){
$out .= '<tr id="'.$element->titre.'">';
foreach($element as $subkey => $subelement){
  if($titre_trt==false){
    $titre .= '<th>'.$subkey.'</th>';
   
  }
  $out .= '<td id="'.$subkey.'">'.$subelement.'</td>';
  }
  if($titre_trt==false){
    $titre.= '<th>Modification</th></tr>';
  }
      $titre_trt= true;
      $out .= '<td id="modifier"><button type="button" class="btn btn-sucess btn-lg" data-toggle="modal" data-target="#myModal"><i class="far fa-edit"></i></button></td>';
  $out .= "</tr>";
}
$out ='<table id="livres" class="table table-dark">'.$titre.$out.'</table>'; 
echo $out;
?>
<script src="../vue/js/livre.js"></script>

