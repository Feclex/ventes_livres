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

}
?>