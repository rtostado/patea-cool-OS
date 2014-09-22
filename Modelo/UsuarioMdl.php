<?php

class UsuarioMdl{
	
	public $nombre;
	public $apellidoP;
	public $apellidoM;
	public $direccion;
	public $telefono;
	public $correo;
	
	//
	public function crear($nombre,$apellidoP,$apellidoM,$direccion,$telefono)
	{
		$this->nombre 	  = $nombre;
		$this->apellidoP  = $apellidoP;
		$this->apellidoM  = $apellidoM;
		$this->direccion  = $direccion;
		$this->telefono	  = $telefono;
		$this->correo	  = $correo;
		
		return TRUE;
	}
	public function eliminar(){}
	public function actualizar(){}
	
}
