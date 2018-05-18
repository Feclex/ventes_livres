<?php
class utilisateurs extends Model{
	protected $table = "utilisateurs";	
	protected $PK = "utilisateur";
	
		function utilisateur_active($Utilisateur){
		$sql= "call Utilisateur_active('".$Utilisateur."') ";
		$this->connection->query($sql);
		}

		function utilisateur_desactive($Utilisateur){
		$sql= "call Utilisateur_desactive ('".$Utilisateur."')";
		$this->connection->query($sql);
		}
	}	
?>