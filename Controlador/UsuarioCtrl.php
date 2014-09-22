<?php

class UsuarioCtrl{
	private $modelo;
	
	//constructor
	function __construct(){
		require 'modelo/UsuarioMdl.php';
		$this->modelo = new UsuarioMdl();
	}
	
	//se inicia la ejecucion del
	function run(){
		switch ($_GET['act']) {
			case 'crear':
				$this -> crear();				
				break;
			case 'eliminar':
				$this -> eliminar();
				break;
			case 'actualizar':
				$this -> actualizar();
				break;
			default:
				
				break;
		}
	}
	//validacion del correo
	private function validaCorreo($correo){
		//exprecion regular de correo 
		// caracter, numero, guion bajo o medio '@' caracter '.' caracter 
	}
	
	//validacion del nombre
	private function validaNombre($nombre){
		
	}
	
	//validacion del telefono
	private function validaTelefono($telefono){
		
	}
	
	//validacion de cualquier tipo de texto
	private function validaTexto($texto){
		
	}
	
	//se asigna a cada variable su valor correcto (ya validado)
	private function crear()
	{
		$nombre		= $this->validaNombre($_POS['nombre']);
		$apellidoP	= $this->validaNombre($_POST['apellidoP']);
		$apellidoM	= $this->validaNombre($_POST['apellidoM']);
		$direccion	= $this->validaTexto($_POST['direccion']);
		$telefono	= $this->validaTelefono($_POST['telefono']);
		$correo		= $this->validaCorreo($_POST['correo']); 
		
		$resultado	= $this->modelo->crear($nombre,$apellidoP,$apellidoM,
											$direccion,$telefono,$correo);
		
		if($resultado){
			require 'vista/UsuarioInsertado.html';
		}
		else {
			require 'vista/Error.html';
		}
	}
	private function eliminar(){
		
	}
	private function actualizar(){
		
	}
}
