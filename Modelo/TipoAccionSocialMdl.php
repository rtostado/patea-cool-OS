<?php
class TipoAccionSocialMdl{

	private $ID;		
	private $tipoAccionSocial;
	
	public function crear($ID,$tipoAccionSocial){
		$this ->ID=$ID;
		$this ->tipoAccionSocial= $tipoAccionSocial;
		return TRUE;
	}
	public function mostrar(){
		print "ID: $this->ID<br/>";
		print "Tipo de Accion Social: $this->tipoAccionSocial<br/>";
	}
	public function eliminar(){
		
	}
	public function actualizar(){
		
	}
}
?>
