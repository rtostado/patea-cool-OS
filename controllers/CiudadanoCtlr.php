<?php

class CiudadanoCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'valida/Validar.php';
		require 'modelo/CiudadanoMdl.php';
		
		$this->valida = new Validar();
		$this->modelo = new CiudadanoMdl();
		
	}
	
	//se inicioa la ejecucion del
	function run(){
		switch ($_GET['act']) {
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
		
		$nombre				= $this->valida->validaNombre($_POS['nombre']);
		$apellidoP			= $this->valida->validaNombre($_POST['apellidoP']);
		$apellidoM			= $this->valida->validaNombre($_POST['apellidoM']);
		$domicilio			= $this->valida->validaDomicilio($_POST['domicilio']); 
		$numeroExterior		= $this->valida->validaNumExt($_POST['numeroExterior']);
		$fecha_nac			= $this->valida->validaFecha($_POST['fecha_nac']);
		$fecha_afiliacion	= $this->valida->validaFecha($_POST['fecha_afiliacion']);
		$telefono_fijo		= $this->valida->validaTelefono($_POST['telefono_fijo']);
		$telefono_cel		= $this->valida->validaTelefono($_POST['telefono_cel']);
		$estado_civil		= $this->valida->validaTexto($_POST['estado_civil']);
		$tipo_sangre		= $this->valida->validaSangre($_POST['tipo_sangre']);
		$grado_de_estudios	= $this->valida->validaTexto($_POST['grado_de_estudios']);
		$profesion			= $this->valida->validaNombre($_POST['profesion']);
		$correo				= $this->valida->validaCorreo($_POST['correo']);
		$trabaja_en			= $this->valida->validaTexto($_POST['trabaja_en']);
		$carrera			= $this->valida->validaTexto($_POST['carrera']);
		$pasatiempos		= $this->valida->validaTexto($_POST['pasatiempos']);
		$religion			= $this->valida->validaTexto($_POST['religion']);
		$reporte			= $this->valida->validaTexto($_POST['reporte']);
		$participo			= $this->valida->validaTexto($_POST['participo']);
		$zonaId				= $this->valida->validaID($_POST['zonaId']);
		$coloniaId			= $this->valida->validaID($_POST['coloniaId']);
		$distritoId			= $this->valida->validaID($_POST['distritoId']);
		$statusId			= $this->valida->validaID($_POST['statusId']);
		$TipoMotivoAfiliacionId = $this->valida->validaID($_POST['TipoMotivoAfiliacionId']);
		
		$resultado	= $this->modelo->Insertar($nombre,$apellidoP,$apellidoM,$domicilio,$numeroExterior,$fecha_nac,$fecha_afiliacion,$telefono_fijo,
						  					  $telefono_cel,$estado_civil,$tipo_sangre,$grado_de_estudios,$profesion,$correo,$trabaja_en,$carrera,
						  					  $pasatiempos,$religion,$reporte,$participo,$zonaId,$coloniaId,$distritoId,$statusId,$TipoMotivoAfiliacionId);
		
		if($resultado){
			require 'vista/InsercionCorrecta.html';
		}
		else {
			require 'vista/Error.html';
		}
	}

	public function Eliminar()
	{
		
	}
	
	public function Modificar()
	{
		
	}
	
}

?>