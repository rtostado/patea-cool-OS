<?php
class BancoIdeasMdl{
	
	//private $ID;
	private $nombre;
	private $descripcion;
	private $status;
	
	//
	public function crear($nombre,$descripcion,$status)
	{
		$this->nombre = $nombre;
		$this->descripcion  = $descripcion;
		$this->status  = $status;
		return TRUE;
	}
	public function mostrar(){
		print "Nombre: $this->nombre<br/>";
		print "Descripcion: $this->descripcion<br/>";
		print "Status: $this->status";
		
	}
	
	public function eliminar($ID){}
	public function actualizar(){}
	
	
	
}
?>