<?php

namespace App\Controllers;

use Core\View;
use Core\Util;
use App\Model\UsersModel;

class UsersController extends UsersModel
{	
	
	// Validaciones para iniciar sesión
	public function loginController(){

		$util = new Util();

		$username = $util->cleanString($_POST['username'], 'string');
		$password = $util->cleanString($_POST['password'], 'string');
		
		$password = crypt($password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

		if(empty($username) || empty($password)){
			
			$alert = [
                "alert"=>"simple",
                "type"=>"error",
                "title"=>"Oops",
                "text"=>"Ningún campo puede estar vacío"
            ];

		}else{

			if(!preg_match("/^[a-zA-ZÀ-ÿ\s0-9]+$/", $username)){

				$alert = [
	                "alert"=>"simple",
	                "type"=>"error",
	                "title"=>"Oops",
	                "text"=>"Los carácteres especiales están prohibidos"
            	];

			}else{

				$data = UsersModel::loginModel($username);

				if(!$data){
					
					$alert = [
		                "alert"=>"simple",
		                "type"=>"error",
		                "title"=>"Oops",
		                "text"=>"El nombre de usuario no existe"
	            	];

				}else{

					if($data->password != $password){
						$alert = [
			                "alert"=>"simple",
			                "type"=>"error",
			                "title"=>"Oops",
			                "text"=>"La contraseña es incorrecta"
	            		];
					}else{

						$alert = [
			                "alert"=>"reload",
			                "type"=>"success",
			                "title"=>"Bienvenido al sistema",
			                "text"=>$username
	            		];
						
						$_SESSION['name'] = $data->name;
						$_SESSION['username'] = $data->username;
						$_SESSION['session'] = $data->role;
						$_SESSION['photo'] = $data->photo;

	            		//echo '<script> window.location.href="' . $util->baseUrl() . '"</script>';

					}

				}

			}

		}

		return $util->sweetAlert($alert);

	}

	// Validaciones para agregar un nuevo usuario
	public function newUserController()
	{
		$util = new Util();

		$name = $util->cleanString($_POST['name'], 'string');
		$username = $util->cleanString($_POST['username'], 'string');
		$password = $util->cleanString($_POST['password'], 'string');
		$role = $_POST['role'];
		$save_route = '';

		if(empty($name) || empty($username) || empty($password)){

			$alert = [
                "alert"=>"simple",
                "type"=>"error",
                "title"=>"Oops",
                "text"=>'Ningún campo puede estar vacío'
            ];

		}else{

			if(!preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/", $name) || !preg_match("/^[a-zA-Z0-9 ]+$/", $username)){

				$alert = [
	                "alert"=>"simple",
	                "type"=>"error",
	                "title"=>"Oops",
	                "text"=>'No se aceptan carácteres especiales en los campos nombre y nombre de usuario'
	            ];


			}else{

				if(strlen($password) < 8){
					
					$alert = [
		                "alert"=>"simple",
		                "type"=>"error",
		                "title"=>"Oops",
		                "text"=>'La contraseña debe tener mínimo 8 carácteres'
	            	];

				}else{

					$check_username = parent::data_query('users', 'username', $username);

					if($check_username->rowCount() > 0){

						$alert = [
			                "alert"=>"simple",
			                "type"=>"error",
			                "title"=>"Oops",
			                "text"=>'El nombre de usuario ya existe'
	            		];

					}else{

						if(isset($_FILES['photo']['tmp_name']) && $_FILES['photo']['tmp_name'] != ''){
							
							list($width, $height) = getimagesize($_FILES['photo']['tmp_name']);
							
							$newWidth = 500;
							$newHeight = 500;
							
							$dir = "../public/assets/images/users/".$username;
							
							if(!mkdir($dir, 0755)){
								$alert = [
								"alert"=>"simple",
								"type"=>"error",
								"title"=>"Oops",
								"text"=>'Ha ocurrido un error creando el directorio'
								];
							}
							
							$rand = mt_rand(100, 999);
							
							if($_FILES['photo']['type'] == 'image/jpeg' || $_FILES['photo']['type'] == 'image/jpg'){
								
								$route = "../public/assets/images/users/".$username."/".$rand.".jpeg";
								$save_route = $util->baseUrl()."assets/images/users/".$username."/".$rand.".jpeg";
								
								//REDIMENCIONAR LA FOTO PARA OCUPAR MENOS ESPACIO
								$dst = imagecreatetruecolor($newWidth, $newHeight);
								$src = imagecreatefromjpeg($_FILES['photo']['tmp_name']);
								
								imagecopyresized($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
								
								//GURADAR LA FOTO EN LA RUTA
								imagejpeg($dst, $route);
								
							}
							
							if($_FILES['photo']['type'] == 'image/png'){
								
								$route = "../public/assets/images/users/".$username."/".$rand.".png";
								$save_route = $util->baseUrl()."assets/images/users/".$username."/".$rand.".png";
								
								//REDIMENCIONAR LA FOTO PARA OCUPAR MENOS ESPACIO
								$dst = imagecreatetruecolor($newWidth, $newHeight);
								$src = imagecreatefrompng($_FILES['photo']['tmp_name']);
								
								imagecopyresized($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
								
								//GURADAR LA FOTO EN LA RUTA
								imagepng($dst, $route);
								
							}
							
						}
						
						$password = crypt($password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
						
						$data = [
							"name" => $name,
							"username" => $username,
							"password" => $password,
							"role" => $role,
							"photo" => $save_route
						];

						$save = UsersModel::newUserModel($data);

						if($save->rowCount() > 0){

							$alert = [
				                "alert"=>"simple",
				                "type"=>"success",
				                "title"=>"!",
				                "text"=>'El usuario se ha guardado correctamente'
	            			];

						}else{

							$alert = [
				                "alert"=>"simple",
				                "type"=>"error",
				                "title"=>"Oops",
				                "text"=>'Ha ocurrido un error. Intente de nuevo.'
	            			];

						}
					}
				}
			}
		}
		return $util->sweetAlert($alert);
	}

}