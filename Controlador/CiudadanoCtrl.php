<?php

class CiudadanoCtrl{
	private $modelo;
	private $valida;
	
	//constructor
	function __construct(){
		require 'aplicacion/Validar.php';
		require 'Modelo/CiudadanoMdl.php';
		
		$this->valida = new Validar();
		$this->modelo = new CiudadanoMdl();
		
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
		$apellidoP=null;
		$apellidoM=null;
		$domicilio=null;
		$numExterior=null;
		$fechaNac=null;
		$fechaAfiliacion=null;
		$telefonoFijo=null;
		$telefonoCel=null;
		$estadoCivil=null;
		$tipoSangre=null;
		$gradoDeEstudios=null;
		$profesion=null;
		$correo=null;
		$trabajaEn=null;
		$carrera=null;
		$pasatiempos=null;
		$reporte=null;
		$participo=null;
		$password=null;
		$seccionId=null;
		$coloniaId=null;
		$distritoId=null;
		$statusId=null;
		$codigoPostal=null;
		$TipoMotivoAfiliacionId=null;
		$referenciadoPor=null;
		$solicitudImagen=null;
		
		
		$numAfiliacion		= $this->valida->ValidaID($_POST['numAfiliacion']);
		$nombre				= $this->valida->validaNombre($_POST['nombre']);
		if(isset($_POST['apellidoP']))
		$apellidoP			= $this->valida->validaNombre($_POST['apellidoP']);
		if(isset($_POST['apellidoM']))
		$apellidoM			= $this->valida->validaNombre($_POST['apellidoM']);
		if(isset($_POST['domicilio']))
		$domicilio			= $this->valida->validaDomicilio($_POST['domicilio']);
		if(isset($_POST['numeroExterior'])) 
		$numExterior		= $this->valida->validaNumExt($_POST['numExterior']);
		if(isset($_POST['fechaNac']))
		$fechaNac			= $this->valida->validaFecha($_POST['fechaNac']);
		if(isset($_POST['fechaAfiliacion']))
		$fechaAfiliacion	= $this->valida->validaFecha($_POST['fechaAfiliacion']);
		if(isset($_POST['telefonoFijo']))
		$telefonoFijo		= $this->valida->validaTelefono($_POST['telefonoFijo']);
		if(isset($_POST['telefonoCel']))
		$telefonoCel		= $this->valida->validaTelefono($_POST['telefonoCel']);
		if(isset($_POST['estadoCivil']))
		$estadoCivil		= $this->valida->validaTexto($_POST['estadoCivil']);
		if(isset($_POST['tipoSangre']))
		$tipoSangre		    = $this->valida->validaSangre($_POST['tipoSangre']);
		if(isset($_POST['gradoDeEstudios']))
		$gradoDeEstudios	= $this->valida->validaTexto($_POST['gradoDeEstudios']);
		if(isset($_POST['profesion']))
		$profesion			= $this->valida->validaNombre($_POST['profesion']);
		if(isset($_POST['correo']))
		$correo				= $this->valida->validaCorreo($_POST['correo']);
		if(isset($_POST['trabajaEn']))
		$trabajaEn			= $this->valida->validaTexto($_POST['trabajaEn']);
		if(isset($_POST['carrera']))
		$carrera			= $this->valida->validaTexto($_POST['carrera']);
		if(isset($_POST['pasatiempos']))
		$pasatiempos		= $this->valida->validaTexto($_POST['pasatiempos']);
		if(isset($_POST['reporte']))
		$reporte			= $this->valida->validaTexto($_POST['reporte']);
		if(isset($_POST['participo']))
		$participo			= $this->valida->validaTexto($_POST['participo']);
		if(isset($_POST['seccionId']))
		$seccionId			= $this->valida->validaID($_POST['seccionId']);
		if(isset($_POST['coloniaId']))
		$coloniaId			= $this->valida->validaID($_POST['coloniaId']);
		if(isset($_POST['distritoId']))
		$distritoId			= $this->valida->validaID($_POST['distritoId']);
		if(isset($_POST['statusId']))
		$statusId			= $this->valida->validaID($_POST['statusId']);
		if(isset($_POST['codigoPostal']))
		$codigoPostal		= $this->valida->validaID($_POST['codigoPostal']);
		if(isset($_POST['TipoMotivoAfiliacion']))
		$TipoMotivoAfiliacionId = $this->valida->validaID($_POST['TipoMotivoAfiliacionId']);
		if(isset($_POST['referenciadoPor']))
		$referenciadoPor	=$this->valida->ValidaID($_POST['referenciadoPor']);		
		//$solicitudImagen	= $this->valida->Valida
		
		$resultado	= $this->modelo->Insertar($numAfiliacion,$nombre,$apellidoP,$apellidoM,$domicilio,$numExterior,$fechaNac,$fechaAfiliacion,$telefonoFijo,
						  					  $telefonoCel,$estadoCivil,$tipoSangre,$correo,$gradoDeEstudios,$profesion,$trabajaEn,$carrera,
						  					  $pasatiempos,$solicitudImagen,$participo,$reporte,$password,$TipoMotivoAfiliacionId,
						  					  $coloniaId,$seccionId,$distritoId,$referenciadoPor,$statusId,$codigoPostal);
		
		if($resultado){
			require 'Vista/UsuarioInsertado.php';
		}
		else {
			$this->modelo->mostrar();
			require 'Vista/Error.php';
			
		}
	}

	public function Eliminar()
	{
		$numAfiliacion	= $this->valida->ValidaID($_POST['numAfiliacion']);
		$resultado 		= $this->modelo->Eliminar($numAfiliacion);
		if($resultado){
			echo "Se ha eliminado el registro: $numAfiliacion";
		}
	}
	
	public function Modificar()
	{
		
		$numAfiliacion		= $this->valida->ValidaID($_POST['numAfiliacion']);
		$nombre				= $this->valida->validaNombre($_POST['nombre']);
		if(isset($_POST['apellidoP']))
		$apellidoP			= $this->valida->validaNombre($_POST['apellidoP']);
		if(isset($_POST['apellidoM']))
		$apellidoM			= $this->valida->validaNombre($_POST['apellidoM']);
		if(isset($_POST['domicilio']))
		$domicilio			= $this->valida->validaDomicilio($_POST['domicilio']);
		if(isset($_POST['numeroExterior'])) 
		$numeroExterior		= $this->valida->validaNumExt($_POST['numeroExterior']);
		if(isset($_POST['fechaNac']))
		$fechaNac			= $this->valida->validaFecha($_POST['fechaNac']);
		if(isset($_POST['fechaAfiliacion']))
		$fechaAfiliacion	= $this->valida->validaFecha($_POST['fechaAfiliacion']);
		if(isset($_POST['telefonoFijo']))
		$telefonoFijo		= $this->valida->validaTelefono($_POST['telefonoFijo']);
		if(isset($_POST['telefonoCel']))
		$telefonoCel		= $this->valida->validaTelefono($_POST['telefonoCel']);
		if(isset($_POST['estadoCivil']))
		$estadoCivil		= $this->valida->validaTexto($_POST['estadoCivil']);
		if(isset($_POST['tipoSangre']))
		$tipoSangre		    = $this->valida->validaSangre($_POST['tipoSangre']);
		if(isset($_POST['gradoDeEstudios']))
		$gradoDeEstudios	= $this->valida->validaTexto($_POST['gradoDeEstudios']);
		if(isset($_POST['profesion']))
		$profesion			= $this->valida->validaNombre($_POST['profesion']);
		if(isset($_POST['correo']))
		$correo				= $this->valida->validaCorreo($_POST['correo']);
		if(isset($_POST['trabajaEn']))
		$trabajaEn			= $this->valida->validaTexto($_POST['trabajaEn']);
		if(isset($_POST['carrera']))
		$carrera			= $this->valida->validaTexto($_POST['carrera']);
		if(isset($_POST['pasatiempos']))
		$pasatiempos		= $this->valida->validaTexto($_POST['pasatiempos']);
		if(isset($_POST['reporte']))
		$reporte			= $this->valida->validaTexto($_POST['reporte']);
		if(isset($_POST['participo']))
		$participo			= $this->valida->validaTexto($_POST['participo']);
		if(isset($_POST['seccionId']))
		$seccionId			= $this->valida->validaID($_POST['seccionId']);
		if(isset($_POST['coloniaId']))
		$coloniaId			= $this->valida->validaID($_POST['coloniaId']);
		if(isset($_POST['distritoId']))
		$distritoId			= $this->valida->validaID($_POST['distritoId']);
		if(isset($_POST['statusId']))
		$statusId			= $this->valida->validaID($_POST['statusId']);
		if(isset($_POST['codigoPostal']))
		$codigoPostal		= $this->valida->validaID($_POST['codigoPostal']);
		if(isset($_POST['TipoMotivoAfiliacion']))
		$TipoMotivoAfiliacionId = $this->valida->validaID($_POST['TipoMotivoAfiliacionId']);
		if(isset($_POST['referenciadoPor']))
		$referenciadoPor	=$this->valida->ValidaID($_POST['referenciadoPor']);
		//$solicitudImagen	= $this->valida->Valida
		
		$resultado	= $this->modelo->Modificar($nombre,$apellidoP,$apellidoM,$domicilio,$numeroExterior,$fechaNac,$fechaAfiliacion,$telefonoFijo,
						  					  $telefonoCel,$estadoCivil,$tipoSangre,$gradoDeEstudios,$profesion,$correo,$trabajaEn,$carrera,
						  					  $pasatiempos,$religion,$reporte,$participo,$zonaId,$coloniaId,$distritoId,$statusId,$codigoPostal
						  					  ,$TipoMotivoAfiliacionId,$solicitudImagen,$referenciadoPor);
		
		if($resultado){
			echo "Registro Actualizado";
		}
		else {
			require 'Vista/Error.php';
		}	
	}
	
}

?>