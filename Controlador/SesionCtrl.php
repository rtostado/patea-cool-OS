<?php
	/**
	 * 
	 */
	class SesionCtrl{
		private $modelo;
		
		function __construct(){
			require 'Modelo/SesionMdl.php';
			$this->modelo = new SesionMdl();
	    }
		
		function isLogged(){
			session_start();
			if($_SESSION['status']="ACTIVO")
				return TRUE;
			return FALSE;
		}
		
		function logOut(){
			session_unset();
			session_destroy();
	
			setcookie(session_name(), '', time()-3600);
		}
		
		function run(){
		switch ($_POST['act']) {
			case 'Login':
				$this->logIn();				
				break;
			default:				
				break;
		}
	}
		
		 
		 function logIn(){
			$id_usuario = htmlentities($_POST['usuario']);
			$password = htmlentities($_POST['password']);
			
			$resultado=$this->modelo->logIn($id_usuario, $password);
			if($resultado){
				require 'Vista/Bienvenida.php';
				$this->logOut();
			}
			/*$_SESSION['nivel']=$nivel;
			$_SESSION['nombre_usuario']=$nombre;*/
		}
	
	}
	
?>