<?php

namespace App\Controllers;

use Core\View;
use Core\Util;
use App\Model\UsersModel;

class UsersController extends UsersModel
{	
	
	public function loginController(){

		$util = new Util();

		$username = $util->cleanString($_POST['username']);
		$password = $util->cleanString($_POST['password']);

		if(empty($username) || empty($password)){
			
			$alert = [
                "alert"=>"simple",
                "type"=>"error",
                "title"=>"Oops",
                "text"=>"Ningún campo puede estar vacío"
            ];

		}else{

			if(!preg_match("/^[a-zA-ZÀ-ÿ\s0-9]+$/", $username) || !preg_match("/^[a-zA-ZÀ-ÿ\s0-9]+$/", $password)){

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

}