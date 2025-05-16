<?php

namespace Model;

class MembresiaPaciente extends ActiveRecord {
    protected static $tabla = 'membresiaPaciente';
    protected static $columnasDB = ['id', 'observaciones', 'membresia_id', 'membresia_pagada', 'pago_valido', 'monto', 'meses', 'codigo', 'user_id'];

    public $id;
    public $observaciones;
    public $membresia_id;
    public $membresia_pagada;
    public $pago_valido;
    public $user_id;
    public $monto;
    public $codigo;
    public $meses;

    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->observaciones = $args['observaciones'] ?? '';
        $this->membresia_id = $args['membresia_id'] ?? '';
        $this->membresia_pagada = $args['membresia_pagada'] ?? '0';
        $this->pago_valido = $args['pago_valido'] ?? '2000-1-1';
        $this->monto = $args['monto'] ?? '0';
        $this->meses = $args['meses'] ?? '0';
        $this->codigo = $args['codigo'] ?? '';
        $this->user_id = $args['user_id'] ?? '';
    }
    public function validarMembresia(){

        if(!$this->membresia_id){
            self::$alertas['error'][] = 'Debes Elegir una Membresía, es Obligatorio';
        }
   }
    
}