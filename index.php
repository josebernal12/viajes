<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ApiController;
use Controllers\PaginasController;
use Controllers\ViajeController;
use MVC\Router;
$router = new Router();

$router->get('/', [PaginasController::class, 'index']);

$router->get('/visitar', [PaginasController::class, 'visitar']);

$router->get('/api/viajes', [ApiController::class, 'apiViajes']);


$router->get('/viajes/crear', [ViajeController::class, 'mostrarViaje']);
$router->post('/viajes/crear', [ViajeController::class, 'crearViaje']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();