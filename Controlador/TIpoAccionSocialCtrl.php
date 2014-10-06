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
			case 'Insertar':
				$this->Insertar();				
				break;
			case 'Eliminar':
				$this->Eliminar();
				break;
			case 'Modificar':
				$this->Modificar();
				break;
			default:				
				break;
		}
	}
	
	//se asigna a cada variable su valor correcto (ya validado)
	private function Insertar()
	{
		//$ID=5;	//ejemplo
		$ID 			  = $this->valida->ValidaID($_POST['ID']);
		$tipoAccionSocial = $this->valida->ValidaTexto($_POST['tipoAccionSocial']);
		
		$resultado		  = $this->modelo->Insertar($ID,$tipoAccionSocial);
		
		if($resultado){
			require 'vista/TipoAccionInsertada.php';	
			//$this -> modelo ->mostrar();
		}
		else {
			require 'vista/Error.php';
		}
	}
	
	public function Eliminar()
	{
		$ID 		= $this->valida->ValidaID($_POST['ID']);
		$resultado 	= $this->modelo->Eliminar($ID);
	}
	
	public function Modificar()
	{
		
	}
	
}
?>