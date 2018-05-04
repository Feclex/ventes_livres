<?php 

class formlogin{
	private $monForm = '';
	private $classeBootstrap = '';

	public function __construct($pName,$pMethod,$pAction,$pOnsubmit='',$pLegend=''){
		$this->monForm='<form name="'.$pName.'" method="'.$pMethod.'" action="'.$pAction.'" onsubmit="'.$pOnsubmit.' class="form-signin">';
	}

	public function getForm(){
		$this->endForm();
		return $this->monForm;
	}


	private function getRequired($pRequired){
		if($pRequired==true){
			return 'required';
		}
		else{
			return '';
		}
	}

	public function addText($pLabel,$pName,$pId,$pParam='',$pRequired=false , $pPlaceholder='' , $pValue='')
	{	
		
		$this->monForm.='<input class= "form-control" type="text" name="'.$pName.'" id="'.$pId.'" '.$this->getRequired($pRequired).' placeholder="'.$pPlaceholder.'" value = "'.$pValue.'"/>';	

		
	}

	public function addPassword($pLabel,$pName,$pId,$pParam='',$pRequired=false , $pPlaceholder='' , $pValue='')
	{	
		

		$this->monForm.='<input class= "form-control" type="password" name="'.$pName.'" id="'.$pId.'" '.$this->getRequired($pRequired).' placeholder="'.$pPlaceholder.'" value = "'.$pValue.'"/><br/>';
	
	}

	
//Fonction qui permet d'ajouter un bouton d'envoi
	public function addSubmit($pName,$pValue,$pParam=null)
	{

		$this->monForm.='<br/><input class= "btn btn-lg btn-primary btn-block" type="submit" name="'.$pName.'" value="'.$pValue.'"/>';
		
	}

//Fonction qui permet d'ajouter un bouton reset
	public function addReset($pName,$pValue,$pParam)
	{
				$this->monForm.='  <input class= "'.$this->classeBootstrap.'" type="reset" name="'.$pName.'" value="'.$pValue.'"/>';
		
	}
	private function endForm()
	{
		$this->monForm.='</fieldset></form>';
		
	}

}

?>