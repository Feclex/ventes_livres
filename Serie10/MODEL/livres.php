<?php
class livres extends Model{
	protected $table = "livres";	
	protected $PK = "livreID";	
	
	function livre_active($titreLivre){
		$sql= 'call livre_active("'.$titreLivre.'")';
		$this->connection->query($sql);
		}

		function livre_desactive($titreLivre){
		$sql= 'call livre_desactive("'.$titreLivre.'")';
		$this->connection->query($sql);
		}


		function livre_create($LivreId,$Titre,$Auteur,$Prix,$Actif){
			$sql= "insert into livres values( ".$LivreId.", '".$Titre."' , '".$Auteur."', ".$Prix." , ".$Actif." ) ";
			echo $sql;
			$this->connection->query($sql);
		}
	
		function livre_update($LivreId,$Titre,$Auteur,$Prix,$Actif){
			$sql= "update livres set titre = '".$Titre."', auteur = '".$Auteur."', prix_unitaire = ".$Prix." , actif = ".$Actif."  where livreID = '".$LivreId."' ";
			echo $sql;
			$this->connection->query($sql);
		}

	}

?>
