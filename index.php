<?php

	$ctrl;

	switch ($_REQUEST['ctrl']) {
		case 'Ciudadano':
			require 'controllers/CiudadanoCtrl.php';
			$ctrl = new CiudadanoCtrl();
			break;
		case 'Bancodeideas':
			require 'controllers/BancodeideasCtlr.php';
			$ctrl = new Bancodeideas();
			break;
		case 'Colonia':
			require 'controllers/ColoniaCtlr.php';
			$ctrl = new Colonia();
			break;
		case 'Distrito':
			require 'controllers/DistritoCtlr.php';
			$ctrl = new Distrito();
			break;
		case 'Zona':
			require 'controllers/ZonaCtlr.php';
			$ctrl = new Zona();
			break;
		case 'Status':
			require 'controllers/StatusCtlr.php';
			$ctrl = new Status();
			break;	
		default:
			break;
	}
	
	$ctrl->run();
