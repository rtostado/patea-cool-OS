<?php

class StatusMdl{
	
	public $statusId;
	public $status;
	
	public function Insertar($statusId,$status)
	{
		$this->statusId	= $statusId;
		$this->status	= $status;
		
		return TRUE;
	}
	
	public function Eliminar($statusId)
	{
		
	}
	
	public function Modificar($statusId)
	{
		
	}
	
}

?>