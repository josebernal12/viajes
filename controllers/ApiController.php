<?php


namespace Controllers;

use Model\Viajes;
use MVC\Router;


class ApiController
{

    public static function apiViajes(Router $router)
    {

        $viajes = Viajes::all();
        echo json_encode($viajes);
    }
}
