<?php

namespace Controllers;



use MVC\Router;
use Model\Masage;
use Model\Mensaje;
use Model\Tarjeta;
use Model\Usuario;
use Model\Membresia;
use Model\Porcentaje;
use Model\MembresiaPaciente;

class InicioController {
    public static function index(Router $router) {
        if(is_auth()){
            // debuguear($_SESSION);
            $paciente = Usuario::find($_SESSION['id']);
        
        }

        $router->render('inicio/index', [
            'titulo' => 'Home',
            'paciente' => $paciente ?? '',
            
        ]);
    }
    public static function contacto(Router $router) {
        if(is_auth()){
            $paciente = Usuario::find($_SESSION['id']);
            
        }
        $alertas = [];
        $mensaje = new Mensaje;
        // $fecha = new DateTime("now", new DateTimeZone('America/Managua')); 
        date_default_timezone_set('America/Managua');
        $fecha = date('d-m-Y');
        $hora = date('H:i:s ');
            // debuguear($hora);
            // debuguear($fecha);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $mensaje->sincronizar($_POST);
            $alertas = $mensaje->validarMensaje();

            if(is_auth()){
                $mensaje->nombre = $paciente->nombre;
                $mensaje->apellido = $paciente->apellido;
                $mensaje->telefono = $paciente->telefono;
                $mensaje->email = $paciente->email;
                $mensaje->fecha = $fecha;
                $mensaje->hora = $hora;

                if(empty($alertas)){
                    $resultado = $mensaje->guardar();
                    if($resultado){
                        header('Location: /contacto');
                    }
                }
            }else{
                $mensaje->fecha = $fecha;
                $mensaje->hora = $hora;
                $resultado = $mensaje->guardar();

                    if($resultado){
                        header('Location: /contacto');
                    }
            }

            
            // debuguear($mensaje);
            }
            $alertas = Mensaje::getAlertas();
        $router->render('inicio/contacto', [
            'titulo' => 'Contacto',
            'alertas' => $alertas,
            'paciente' => $paciente ?? '',
            'mensaje' => $mensaje,
            
        ]);
    }
    public static function membresia(Router $router) {
        if(is_auth()){
            // debuguear($_SESSION);
            $paciente = Usuario::find($_SESSION['id']);
        }

        $membresias = Membresia::all();
        $alertas = [];
        $membresia = new MembresiaPaciente;
        $fecha = date('Y-m-d');
        $fechaActual = date('d-m-Y');
        // debuguear(gettype($fecha));
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $alertas = $membresia->validarMembresia();
            $membresia->sincronizar($_POST);
            // $membresia->membresia_pagada = '0';
            // $membresia->pago_valido = $fecha;
            $membresia->user_id = $paciente->id;
            $membresia->codigo = uniqId();
            // debuguear(empty($alertas));
            // if(is_auth()){
                
                // debuguear($membresia);
                
                if(empty($alertas)){
                    $resultado = $membresia->guardar();
                    // debuguear($resultado);
                    if($resultado){
                        header('Location: /membresia');
                    }
                }
            // }

            
        }

        if(is_auth()){
            $membresiasPaciente = MembresiaPaciente::where('user_id', $paciente->id);

            if($membresiasPaciente){
                $afiliacion = Membresia::find($membresiasPaciente->membresia_id);
            }
            // debuguear($afiliacion);
            $tratamientos = Masage::all();
        }
        
        
        
        // debuguear($afiliacion);
        

        
        

            $alertas = MembresiaPaciente::getAlertas();            

        $router->render('inicio/membresia', [
            'titulo' => 'Membresia',
            'paciente' => $paciente ?? '',
            'membresias' => $membresias,
            'alertas' => $alertas,
            'membresia' => $membresia ?? '',
            'membresiasPaciente' => $membresiasPaciente ?? '',
            'fechaActual' => $fechaActual,
            'afiliacion' => $afiliacion ?? '',
            'tratamientos' => $tratamientos,
        ]);
    }
    public static function tarjeta(Router $router) {
        if(is_auth()){
            // debuguear($_SESSION);
            $paciente = Usuario::find($_SESSION['id']);
        }
        
        $masajes = Masage::all();
        $tarjeta = new Tarjeta;
        
        
        
        
    
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $tarjeta->sincronizar($_POST);
            $alertas = $tarjeta->validarTarjeta();
            if(is_auth()){
                $numeros = [5, 10, 15, 20];
                $tarjeta->codigo = uniqId();
                $tarjeta->porcentaje_id = array_rand($numeros, 1)+1;
                $tarjeta->user_id = $paciente->id;

                
                if(empty($alertas)){
                    $resultado = $tarjeta->guardar();
                    if($resultado){
                        header('Location: /tarjeta/show?token=' . $tarjeta->codigo);
                    }
                }
            }
        }
        if(is_auth()){

            $tarjetaPaciente = Tarjeta::where('user_id', $paciente->id);
        }
        
        // debuguear($tarjetaPaciente);
        $alertas = Tarjeta::getAlertas();
        $router->render('inicio/tarjeta', [
            'titulo' => 'Tarjeta fidelidad',
            'paciente' => $paciente ?? '',
            'masajes' => $masajes,
            'alertas' => $alertas,
            'tarjetaPaciente' => $tarjetaPaciente ?? '',
            
        ]);
    }
    public static function servicios(Router $router) {
        if(is_auth()){
            // debuguear($_SESSION);
            $paciente = Usuario::find($_SESSION['id']);
        
        }

        $router->render('inicio/servicios', [
            'titulo' => 'servicios',
            'paciente' => $paciente ?? '',
            
        ]);
    }
    public static function estetica(Router $router) {
        if(is_auth()){
            // debuguear($_SESSION);
            $paciente = Usuario::find($_SESSION['id']);
        
        }

        $router->render('inicio/estetica', [
            'titulo' => 'estetica',
            'paciente' => $paciente ?? '',
            
        ]);
    }
    public static function error(Router $router) {
        if(is_auth()){
            // debuguear($_SESSION);
            $paciente = Usuario::find($_SESSION['id']);
        
        }

        $router->render('inicio/404', [
            'titulo' => 'ERROR',
            'texto' => 'Página no encontrada',
            'paciente' => $paciente,
            
        ]);
    }

}