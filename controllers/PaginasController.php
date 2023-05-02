<?php


namespace Controllers;

use Model\Viajes;
use MVC\Router;


class PaginasController
{

    public static function index(Router $router)
    {
        $viajes = Viajes::all();

        $router->render('paginas/index', [
            'viajes' => $viajes,
        ]);
    }
    public static function visitar(Router $router)
    {

        $id = $_GET['id'];
        $viaje = Viajes::find($id);

        $router->render('visitar/index', [
            'viaje' => $viaje
        ]);
    }
}
