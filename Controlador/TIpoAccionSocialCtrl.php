<?php
class TipoAccionSocialCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'modelo/TipoAccionSocialMdl.php';
		$this->modelo = new TipoAccionSocialMdl();
		require 'Validar.php';
		$this->valida=new Validar();
	}
	
	//se inicia la ejecucion del
	function run(){
		switch ($_POST['act']) {
			case 'crear':
				$this->crear();				
				break;
			
			default:
				
				break;
		}
	}
	
	//se asigna a cada variable su valor correcto (ya validado)
	private function crear()
	{
		$ID=5;	//ejemplo
		$tipoAccionSocial = $this->valida->ValidaTexto($_POST['tipoAccionSocial']);
		$resultado	= $this->modelo->crear($ID,$tipoAccionSocial);
		if($resultado){
			require 'vista/TipoAccionInsertada.php';	
			$this -> modelo ->mostrar();
		}
		else {
			require 'vista/Error.php';
		}
	}
}
?>