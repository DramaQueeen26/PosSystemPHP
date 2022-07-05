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
			                "alert"=>"simple",
			                "type"=>"success",
			                "title"=>"Bienvenido al sistema",
			                "text"=>$username
	            		];

						$_SESSION['session'] = $data->role;
						$_SESSION['username'] = $data->username;

	            		echo '<script> window.location.href="' . $util->baseUrl() . '"</script>';

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

						$data = [
							"name" => $name,
							"username" => $username,
							"password" => $password,
							"role" => $role
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