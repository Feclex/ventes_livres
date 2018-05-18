

<head>
  <title>Liste membres</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<?php
$out = "";
$titre= '<tr>';
$titre_trt= false;
foreach($Utilisateurs->data as $key => $element){
$out .= '<tr id="'.$element->utilisateur.'">';
foreach($element as $subkey => $subelement){
if($titre_trt==false){
$titre .= '<th>'.$subkey.'</th>';
}
$out .= '<td id="'.$subkey.'">'.$subelement.'</td>';
}
if($titre_trt==false){
$titre.='</tr>';
}
$titre_trt= true;
$out .= "</tr>";
}
$out ='<table id="utilisateurs">'.$titre.$out.'</table>'; 
echo $out;
?>

<!-- // <script> -->
<!-- // function showHint(str) {
//     if (str.length == 0) { 
//         document.getElementById("txtHint").innerHTML = "";
//         return;
//     } else {
//         var xmlhttp = new XMLHttpRequest();
//         xmlhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("txtHint").innerHTML = this.responseText;
//             }
//         };
//         xmlhttp.open("GET", "../control/gethintcontrol.php?PRENOM=" + str, true);
//         xmlhttp.send();
//     }
// } -->
<!-- // </script> -->

