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


		function livre_create($Titre,$Auteur,$Prix){
			$sql= "insert into livres values( '".$Titre."' , '".$Auteur."', '".$Prix."') ";
			$this->connection->query($sql);
		}
	
		function livre_update($Titre,$Auteur,$Prix){
			$sql= "update livres set titre = '".$Titre."', auteur = '".$Auteur."', prix = '".$Prix."' ";
			$this->connection->query($sql);
		}

	}

?>
