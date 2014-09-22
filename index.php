<?php
$ctrl="";
if(isset($_GET["ctrl"])){
	switch ($_REQUEST['ctrl']) {
	case 'usuario':
		require 'Controlador/CiudadanoCtrl.php';
		$ctrl = new CiudadanoCtrl();
		break;
	case 'accion':
		require 'Controlador/AccionSocialCtrl.php';
		$ctrl = new AccionSocialCtrl();
		break;
	case 'tipoAccion':
		require 'Controlador/TipoAccionSocialCtrl.php';
		$ctrl= new TipoAccionSocialCtrl();
		break;
	case 'bancoIdea':
		require 'Controlador/BancoIdeasCtrl.php';
		$ctrl = new BancoIdeasCtrl();
		break;
	case 'colonia':
		require 'Controlador/ColoniaCtrl.php';
		$ctrl = new ColoniaCtrl();
		break;
	case 'distrito':
		require 'Controlador/DistritoCtrl.php';
		$ctrl = new DistritoCtrl();
		break;	
	case 'status':
		require 'Controlador/StatusCtrl.php';
		$ctrl = new StatusCtrl();
		break;
	case 'zona':
		require 'Controlador/ZonaCtrl';
		$ctrl = new ZonaCtrl();
		break;
	default:
		echo "No hay parametros validos";
		break;
	}
	
	$ctrl -> run();
}else{
	echo "No hay parametros";
}
	
?>