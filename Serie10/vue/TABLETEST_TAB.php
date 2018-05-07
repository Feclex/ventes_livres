

<head>
  <title>Liste membres</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body><table class="table table-dark">
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


