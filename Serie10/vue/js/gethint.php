<?php

$hint = "";

// lookup all hints from array if $q is different from "" 
$VarPrenom 	 ="";
$VarNom = "";
$where ="";

?>

<table class="table table-dark">
<thead>
  <tr>

	<th scope="col">Utilisateur</th>
	<th scope="colspan">Nom</th>
	<th scope="col">Prenom</th>
   
	<th scope="colspan">Modification</th>
   
	<th scope="col">Actif/Désactiver</th>
  </tr>
</thead>
<tbody>
<?php

foreach($ventelivres->data as $k){
  echo '
  <tr>
  <td>'.$k->utilisateur.' </td>
  <td>'.$k->nom.' </td>
  <td>'.$k->prenom.'</td>
  <td></td>
  <td>'.$k->actif.'</td>
</tr>'
  /*echo $k->nom .', '. $k->prenom .'<br>'*/;
  
}
?>
</tbody>
</table>


<?php

// Output "no suggestion" if no hint was found or output correct values 

echo count($ventelivres->data)  == 0 ? " " : $hint;
if(count($ventelivres->data)  == 0 )
{	echo'Prénom incorrect'; }
?>