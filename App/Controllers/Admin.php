<?php

namespace App\Controllers;

use Core\View;
use Core\Util;
use App\Controllers\UsersController;

class Admin
{
    /*=============================================
    =                   VIEWS                     =
    =============================================*/
    
    public function index()
    {
        //Si hay una sesión iniciada llamar la página de inicio
        if(isset($_GET['url']) != 'admin' && isset($_SESSION['session']) == 'admin'){

            $views = ['admin/index'];
            $args  = ['title' => 'Inicio'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);

        // Si no hay una sesión iniciada
        }else if(isset($_GET['url']) != 'admin' && !isset($_SESSION['session'])){

            // Si se envía el form para iniciar sesión
            if(isset($_POST['username'])){

                $login = new UsersController();
                echo $login->loginController();

            // Si no se envía que muestra la página de login
            }else{

                $views = ['templates/login'];
                $args  = ['title' => 'Inicia sesión'];
                View::render($views, $args, $header = null, $footer = null);
            
            }

        // Redirigir a inicio si se coloca en la URL admin/index
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';
        
        }
    }

    // Cerrar sesión
    public function logout(){
        
        $baseUrl = new Util();
        session_destroy();
        echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

    }

    public function business()
    {
        if(isset($_SESSION['session']) == 'admin'){
        
            $views = ['admin/business'];
            $args  = ['title' => 'Negocios'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }
    }

    public function add_business()
    {
        if(isset($_SESSION['session']) == 'admin'){
        
            $views = ['admin/add_business'];
            $args  = ['title' => 'Agregar negocio'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }
    }

    public function products()
    {
        if(isset($_SESSION['session']) == 'admin'){
        
            $views = ['admin/products'];
            $args  = ['title' => 'Productos'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }
    }

    public function categories()
    {
        if(isset($_SESSION['session']) == 'admin'){
        
            $views = ['admin/categories'];
            $args  = ['title' => 'Categorías'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }
    }

    public function sales()
    {
        if(isset($_SESSION['session']) == 'admin'){
        
            $views = ['admin/sales'];
            $args  = ['title' => 'Ventas'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }
    }

    public function new_sale()
    {
        if(isset($_SESSION['session']) == 'admin'){
        
            $views = ['admin/new_sale'];
            $args  = ['title' => 'Nueva venta'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }    }

    public function reports()
    {
        if(isset($_SESSION['session']) == 'admin'){
        
            $views = ['admin/reports'];
            $args  = ['title' => 'Reportes'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }
    }

    public function customers()
    {
        if(isset($_SESSION['session']) == 'admin'){
        
            $views = ['admin/customers'];
            $args  = ['title' => 'Clientes'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }
    }

    public function users()
    {
        // Si hay sesión iniciada
        if(isset($_SESSION['session']) == 'admin'){
        
            // Si se envían datos en el form llamar a la función para agregar un nuevo usuario
            if(isset($_POST['username'])){
                
                $newUser = new UsersController();
                echo $newUser->newUserController();
            
            // Si no se envían datos en el form
            }else{
				
				$showUsers = new UsersController();
				$showUsers = $showUsers->showUsersController();
				
                $views = ['admin/users'];
                $args  = [
					'title' => 'Usuarios',
					'rows' => $showUsers
					];
                $header = 'templates/admin/header';
                $footer = 'templates/admin/footer';
                View::render($views, $args, $header, $footer);

            }

        // Si no hay sesión iniciada redirigir a la página de inicio
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }
    }

    public function settings()
    {
        if(isset($_SESSION['session']) == 'admin'){
        
            $views = ['admin/settings'];
            $args  = ['title' => 'Configuración del sistema'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);
        
        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';

        }
    }

}
