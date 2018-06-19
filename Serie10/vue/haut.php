<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $Montitle; ?></title>
	<link rel="stylesheet" href="../vue/css/page.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">	
</head>
<body>

	<nav class="navbar navbar-inverse" id="haut">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="brand" href="page1.php" name="top">Vente livres</a>
			</div>
			<ul class="nav navbar-nav">
		<?php
if($_SESSION != TRUE){
			Echo '<li><a href="login.php">Login</a></li>';
		}

	?>	
				
				<!-- <li><a href="Page2.php">Page 2</a></li> -->
				<li><a href="Page1.php"><i class="icon-home icon-white"></i> Accueil</a></li>
			
				<li><a href="Page4.php"><i class="icon-file icon-white"></i> Livres</a></li>
				<li><a href="Page5.php"><i class="icon-user icon-white"></i> Membres</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li><a href="Page3.php"><i class="glyphicon glyphicon-shopping-cart"></i> Panier</a></li>
				<?php
if(isset($_SESSION['UTILISATEUR_OK']) && $_SESSION['UTILISATEUR_OK'] == 1 && isset($_SESSION['UTILISATEUR_NOM'])){
			Echo /* $_SESSION['UTILISATEUR_NOM'].*/'
	
				<div class="btn-group pull-right">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="session_destroy.php">
						<i class="icon-user"></i> Compte	<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					<form action="session_destroy.php" method="post" accept-charset="utf-8">
						<li><a href="session_destroy.php"><i class="icon-share"></i>Logout</a></li>
						</form>
					</ul>
				</div>'
				
				;

		}
	 
	?>
				</ul>	
		</div>		
	</nav>