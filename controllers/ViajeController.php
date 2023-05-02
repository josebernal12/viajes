<?php


namespace Controllers;

use Model\Viajes;
use MVC\Router;


class ViajeController
{

    public static function mostrarViaje(Router $router)
    {

        $router->render('viajes/crearViaje',[
            
        ]);

    }
}