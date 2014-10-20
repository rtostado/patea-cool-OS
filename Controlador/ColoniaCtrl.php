<?php

class ColoniaCtrl{
	private $modelo;
	private $valida;


	//constructor
	function __construct(){
		require 'aplicacion/Validar.php';
		require 'Modelo/ColoniaMdl.php';

		$this->modelo = new ColoniaMdl();
		$this->valida = new Validar();
	}

	//se inicioa la ejecucion del
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

	private function Insertar()
	{
		$asociacion_col =null;
		$presidente_col =null;
		if(isset($_POST['asociacion_col']))
			$asociacion_col = $this->valida->ValidaTexto($_POST['asociacion_col']);
		if(isset($_POST['presidente_col']))
			$presidente_col = $this->valida->ValidaNombre($_POST['presidente_col']);
		$coloniaId		= $this->valida->validaID($_POST['coloniaId']);
		$colonia		= $this->valida->validaNombre($_POST['colonia']);
		$resultado	= $this->modelo->Insertar($coloniaId,$colonia,$asociacion_col, $presidente_col);
		if($resultado){
			require 'Vista/InsercionCorrecta.php';
			require 'correo.php';
			$this->modelo->mostrar();
		}
		else {
			require 'Vista/Error.html';
		}
	}

	public function Eliminar()
	{
		$coloniaId = $this->valida->ValidaID($_POST['coloniaId']);
		$resultado = $this->modelo->Eliminar($coloniaId);
		if($resultado){
			echo "Se ha eliminado el registro: $coloniaId";
		}
	}

	public function Modificar()
	{
		$asociacion_col =null;
		$presidente_col =null;
		if(isset($_POST['asociacion_col']))
			$asociacion_col = $this->valida->ValidaTexto($_POST['asociacion_col']);
		if(isset($_POST['presidente_col']))
			$presidente_col = $this->valida->ValidaNombre($_POST['presidente_col']);
		$coloniaId		= $this->valida->validaID($_POST['coloniaId']);
		$colonia		= $this->valida->validaNombre($_POST['colonia']);
		$resultado	= $this->modelo->Modificar($coloniaId,$colonia,$asociacion_col, $presidente_col);
		if($resultado){
			echo "Registro actualizado";
			$this->modelo->mostrar();
		}
	}
}

?>