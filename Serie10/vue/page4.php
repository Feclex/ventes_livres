

<head>
  <title>Liste lisvre</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body><table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">Auteur</th>
      <th scope="col">Titre</th>
	  <th scope="col">Prix</th>
      <th scope="col">Actif/Désactiver</th>
    </tr>
  </thead>
  <tbody>
  <?php 
foreach($ventelivres->data as $k){
	echo '
	<tr>
	<td>'.$k->auteur.' </td>
	<td>'.$k->titre.' </td>
	<td>'.$k->prix_unitaire.'€ </td>
	<td>'.$k->actif.' </td>
	<td></td>
  </tr>'
	/*echo $k->nom .', '. $k->prenom .'<br>'*/;
}
?>

  </tbody>
</table>


