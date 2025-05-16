<?php

namespace Model;

class Porcentaje extends ActiveRecord {
    protected static $tabla = 'porcentajes';
    protected static $columnasDB = ['id', 'numero'];

    public $id;
    public $numero;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->numero = $args['numero'] ?? '';
    }

   
}