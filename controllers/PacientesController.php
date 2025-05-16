<?php

namespace Controllers;

use DateTime;
use MVC\Router;
use Model\Usuario;
use Model\Membresia;
use Model\Masage;
use Classes\Paginacion;
use Model\MembresiaPaciente;


Class PacientesController{

    
    public static function crear(Router $router){

        if(!is_admin()){
            header('Location: /auth/login');
        }
        $alertas = [];
        $paciente = new Usuario;
       

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /auth/login');
            }
            
            $paciente->sincronizar($_POST);

            // Validar

            $alertas = $paciente->validar_cuenta();

            //Revisar que alerta este vacio
            if(empty($alertas)){
                // Verificar que el usuario no este registrado
                $resultado = $paciente->existeUsuario();

                if($resultado->num_rows){
                    $alertas = Usuario::getAlertas();
                }else{
                    //El usuario no esta registrado
                    // Hashear el password
                    $paciente->hashPassword();

                    // Generar uh token único
                    $paciente->crearToken();

                    // Enviar el email
                    // $email = new Email($paciente->email, $paciente->nombre, $paciente->apellido, $paciente->token);

                    // $email->enviarConfirmacion();
                    // Confirmar paciente
                    $paciente->confirmado = 1;
                    $paciente->membresia_pagada = 0;

                    // Crear paciente o cliente
                    $resultado = $paciente->guardar();

                    if($resultado){
                        header('Location: /admin/pacientes?page=1');
                    }


                    // debuguear($usuario);
                    
                }
            }
            
        }
        // debuguear($ponentes);

        $router->render('/admin/dashboard/crearPaciente', [
            'titulo'=> 'Registrar un Paciente nuevo',
            'alertas' => $alertas,
            'paciente' => $paciente
            
        ]);
    }
    public static function editarPaciente(Router $router){
       
        if(!is_admin()){
            header('Location: /auth/login');
        }
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);// convertir el id en un número entero

        if(!$id){
            header('Location: /admin/pacientes?page=1');
        }

        // Obtener el ponente a editar
        $paciente = Usuario::find($id);

        if(!$paciente){
            header('Location: /admin/pacientes?page=1');
        }

       

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /auth/login');
            }
              
            $paciente->sincronizar($_POST);
            // debuguear($paciente);
            $alertas = $paciente->validar();

            if(empty($alertas)) {
                
                $resultado = $paciente->guardar();
                if($resultado) {
                    header('Location: /admin/pacientes?page=1');
                }
            }
        }

        $router->render('/admin/dashboard/editarPaciente', [
            'titulo'=> 'Actualizar Información',
            'alertas' => $alertas,
            'paciente' => $paciente
            
        ]);
    }
    public static function showPaciente(Router $router){

        if(!is_admin()){
            header('Location: /auth/login');
        }
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);// convertir el id en un número entero

        $paciente = Usuario::find($id);
        $membresiaPaciente = MembresiaPaciente::where('user_id', $paciente->id);
        if($membresiaPaciente){

            $fechaValidez = date('d-m-Y', strtotime( $membresiaPaciente->pago_valido));
            $afiliacion = Membresia::where('id', $membresiaPaciente->membresia_id);
        }
        // debuguear($afiliacion);

        if(!$id){
            header('Location: /admin/pacientes?page=1');
        }

        if(!$paciente){
            header('Location: /admin/pacientes?page=1');
        }
        // debuguear($paciente);
        $cumple = new DateTime($paciente->fecha);
        $hoy = new DateTime();
        $edad = $hoy->diff($cumple);
        

        $nuevaPacienteFecha = date('d-m-Y', strtotime($paciente->fecha));
        $fechaActual = date('Y-m-d');
        $tratamientos = Masage::all();

        $router->render('/admin/dashboard/showPaciente', [
            'titulo' => 'Datos de ' ,
            'alertas' => $alertas,
            'paciente' => $paciente,
            'edad' => $edad,
            'nuevaPacienteFecha' => $nuevaPacienteFecha,
            'membresiaPaciente' => $membresiaPaciente,
            'afiliacion' => $afiliacion ?? '',
            'fechaValidez' => $fechaValidez ?? '',
            'fechaActual' => $fechaActual,
            'tratamientos' => $tratamientos,
            
        ]);
    }
    public static function eliminar(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /auth/login');
            }
            $id = $_POST['id'];
            $paciente = Usuario::find($id);

            if(!isset($paciente)){
                header('Location: /admin/pacientes');
            }

            $resultado = $paciente->eliminar();
            if($resultado){
                header('Location: /admin/pacientes');

            }
            // debuguear($ponente);
        }
    }
}