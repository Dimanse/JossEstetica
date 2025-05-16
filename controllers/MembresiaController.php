<?php

namespace Controllers;


use MVC\Router;
use Model\Usuario;
use Model\Membresia;
use Classes\Paginacion;
use Model\MembresiaPaciente;

class MembresiaController {
    public static function index(Router $router) {
        if(!is_admin()){
            header('Location: /auth/login');
        }

        
            $id = $_GET['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            $paciente = Usuario::find($id);
            $membresiaPaciente = MembresiaPaciente::where('user_id', $paciente->id);
            $membresia = Membresia::where('id', $membresiaPaciente->membresia_id);
            $fechaActual = date('Y-m-d');
            


      
        // debuguear($membresiaPaciente->pago_valido);

       
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(!is_admin()){
                header('Location: /auth/login');
            }
            $membresiaPaciente->sincronizar($_POST);
            // $paciente->membresia_pagada = $_POST['membresia_pagada'];
            // debuguear($paciente);
            $resultado = $membresiaPaciente->guardar();
                if($resultado) {
                    header('Location: /admin/pacientes?page=1');
                }

            
            
            
        }

        $router->render('admin/dashboard/membresia', [
            'titulo' => 'Finalizar membresia',
            'alertas' => $alertas,
            'paciente' => $paciente,
            'membresia' => $membresia,
            'membresiaPaciente' => $membresiaPaciente,
            'fechaActual' => $fechaActual,
        ]);

        
    }
    public static function show(Router $router) {
        if(!is_admin()){
            header('Location: /auth/login');
        }

        $membresias = MembresiaPaciente::all();


        // $pagina_actual = $_GET['page'];
        // $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);
        // // debuguear($pagina_actual);
        // if(!$pagina_actual || $pagina_actual < 1){
        //     header('Location: /admin/membresias?page=1');
        // }
        
        // $registros_por_pagina = 10;
        // $total_registros = Usuario::total();
        // $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total_registros);

        // if($paginacion->total_paginas() < $pagina_actual){
        //     header('Location: /admin/membreisas?page=1');
        // }
        // // debuguear($paginacion->pagina_siguiente());
        // $membresias = MembresiaPaciente::paginar($registros_por_pagina, $paginacion->offset());

        $fechaActual = date('Y-m-d');
        // debuguear($ponentes);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $codigo = $_POST['terminoBusqueda'];
            $membresia = MembresiaPaciente::where('codigo', $codigo);
            // debuguear($membresia);
        }
            

        $router->render('admin/dashboard/showMembresia', [
            'titulo' => 'Membresias Registradas',
            'membresias' => $membresias,
            'membresia' => $membresia ?? '',
            // 'paginacion' => $paginacion->paginacion(),
            'fechaActual' => $fechaActual,
        ]);

        
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /auth/login');
            }
            $id = $_POST['id'];
            $membresia = MembresiaPaciente::find($id);

            if(!isset($membresia)){
                header('Location: /admin/membresias');
            }

            $resultado = $membresia->eliminar();
            if($resultado){
                header('Location: /admin/membresias');

            }
            // debuguear($membresia);
        }
    }
}