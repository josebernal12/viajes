<?php


namespace Model;


class Viajes extends ActiveRecord
{
    protected static $tabla = 'viajes';
    protected static $columnasDB = ['id', 'nombre', 'precio', 'fecha', 'hora', 'boletos'];

    public $id;
    public $nombre;
    public $precio;
    public $fecha;
    public $hora;
    public $boletos;
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->hora = $args['hora'] ?? '';
        $this->boletos = $args['boletos'] ?? '';
    }
}
