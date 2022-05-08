<?php

namespace App\Controllers;

use Core\View;
use Core\Util;

class Admin
{
    /*=============================================
    =                   VIEWS                     =
    =============================================*/
    
    public function index()
    {
        if(isset($_GET['url']) != 'admin'){

            $views = ['admin/index'];
            $args  = ['title' => 'Home'];
            $header = 'templates/admin/header';
            $footer = 'templates/admin/footer';
            View::render($views, $args, $header, $footer);

        }else{

            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';
        
        }
    }

    public function business()
    {
        $views = ['admin/business'];
        $args  = ['title' => 'Negocios'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

    public function add_business()
    {
        $views = ['admin/add_business'];
        $args  = ['title' => 'Agregar negocio'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

    public function products()
    {
        $views = ['admin/products'];
        $args  = ['title' => 'Productos'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

    public function categories()
    {
        $views = ['admin/categories'];
        $args  = ['title' => 'Categorías'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

    public function sales()
    {
        $views = ['admin/sales'];
        $args  = ['title' => 'Ventas'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

    public function new_sale()
    {
        $views = ['admin/new_sale'];
        $args  = ['title' => 'Nueva venta'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

    public function reports()
    {
        $views = ['admin/reports'];
        $args  = ['title' => 'Reportes'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

    public function customers()
    {
        $views = ['admin/customers'];
        $args  = ['title' => 'Clientes'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

    public function users()
    {
        $views = ['admin/users'];
        $args  = ['title' => 'Usuarios'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

    public function settings()
    {
        $views = ['admin/settings'];
        $args  = ['title' => 'Configuración del sistema'];
        $header = 'templates/admin/header';
        $footer = 'templates/admin/footer';
        View::render($views, $args, $header, $footer);
    }

}
