
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


