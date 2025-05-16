<?php

namespace Model;

class Membresia extends ActiveRecord {
    protected static $tabla = 'membresias';
    protected static $columnasDB = ['id', 'membresia', 'descuento', 'precio'];

    public $id;
    public $membresia;
    public $precio;
    public $descuento;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->membresia = $args['membresia'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->descuento = $args['descuento'] ?? '';
    }

   
}