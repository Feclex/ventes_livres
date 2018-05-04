<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $Montitle; ?></title>
	<link rel="stylesheet" href="../vue/css/page.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>
<body>

	<nav class="navbar navbar-inverse" id="haut">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="Page1.php">Ventes Livres</a>
			</div>
			<ul class="nav navbar-nav">
			<?php
if($_SESSION != TRUE){
			Echo '<li><a href="login.php">Login</a></li>';
		}

	?>	
				<li><a href="Page1.php">Accueil</a></li>
				<!-- <li><a href="Page2.php">Page 2</a></li> -->
				<li><a href="Page3.php">Panier</a></li>
				<li><a href="Page4.php">Livres</a></li>
				<li><a href="Page5.php">Membres</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Panier</a></li>
				<?php
if(isset($_SESSION['UTILISATEUR_OK']) && $_SESSION['UTILISATEUR_OK'] == 1 && isset($_SESSION['UTILISATEUR_NOM'])){
			Echo /* $_SESSION['UTILISATEUR_NOM'].*/'
			<li><form action="session_destroy.php" method="post" accept-charset="utf-8">
					<button class="glyphicon glyphicon-user"> se déconnecter</button>
				</form></li></ul>';

		}
	 
	?>
				</ul>
			

		</div>
	</nav>
