<?php

namespace Model;

class Tarjeta extends ActiveRecord {
    protected static $tabla = 'tarjetas';
    protected static $columnasDB = ['id', 'codigo', 'porcentaje_id', 'masaje_id', 'user_id'];

    public $id;
    public $codigo;
    public $porcentaje_id;
    public $masaje_id;
    public $user_id;
    public $terminoBusqueda;
    public $datos;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->codigo = $args['codigo'] ?? '';
        $this->porcentaje_id = $args['porcentaje_id'] ?? '';
        $this->masaje_id = $args['masaje_id'] ?? '';
        $this->user_id = $args['user_id'] ?? '';
    }

    public function validarTarjeta() {
        if(!$this->masaje_id) {
            self::$alertas['error'][] = 'Debes Elegir un masaje, es Obligatorio';
        }

        if(strlen($this->masaje_id) < 0) {
            self::$alertas['error'][] = 'Debes Elegir un masaje, es Obligatorio';
        }
    }
    public function validarCard() {
        if(!$this->terminoBusqueda) {
            self::$alertas['error'][] = 'Debes Introducir el Código de la Tarjeta, es Obligatorio';
        }

       
    }
    // public function alertaCodigo() {
    //     if(!$this->codigo) {
    //         self::$alertas['error'][] = 'La Tarjeta que Buscas no Existe';
    //     }

       
    // }
   
}