<?php

namespace Controllers;

use MVC\Router;

class ProductoController{
    public static function index(Router $router){
        $saludo = "hola mundo";
        $router->render('productos/index', [
            "saludo" => $saludo,
        ]);
    }


}