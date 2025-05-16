<?php

namespace Model;

class Mensaje extends ActiveRecord {
    protected static $tabla = 'mensajes';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'telefono', 'mensaje', 'fecha', 'hora'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;
    public $mensaje;
    public $fecha;
    public $hora;

    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->mensaje = $args['mensaje'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->hora = $args['hora'] ?? '';
    }

   

    // Validación para cuentas nuevas
    public function validarMensaje() {
        if(is_auth()){
            if(!$this->mensaje) {
                self::$alertas['error'][] = 'Debes añadir tu mensaje, es Obligatorio';
            }
        }else{
            if(!$this->nombre) {
                self::$alertas['error'][] = 'El Nombre es Obligatorio';
            }
            if(!$this->apellido) {
                self::$alertas['error'][] = 'Los Apellidos son Obligatorio';
            }
            if(!$this->email) {
                self::$alertas['error'][] = 'El Email es Obligatorio';
            }
            if(!$this->telefono) {
                self::$alertas['error'][] = 'El teléfono de contacto es Obligatorio';
            }
            if(!$this->mensaje) {
                self::$alertas['error'][] = 'Debes añadir tu mensaje, es Obligatorio';
            }
        }

            // if(!$this->nombre) {
            //     self::$alertas['error'][] = 'El Nombre es Obligatorio';
            // }
            // if(!$this->apellido) {
            //     self::$alertas['error'][] = 'Los Apellidos son Obligatorio';
            // }
            // if(!$this->email) {
            //     self::$alertas['error'][] = 'El Email es Obligatorio';
            // }
            // if(!$this->telefono) {
            //     self::$alertas['error'][] = 'El teléfono de contacto es Obligatorio';
            // }
            // if(!$this->mensaje) {
            //     self::$alertas['error'][] = 'Debes añadir tu mensaje, es Obligatorio';
            // }
        
        
        return self::$alertas;
    }

    
}