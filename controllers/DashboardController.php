<?php

namespace Controllers;

use MVC\Router;
use Model\Mensaje;
use Model\Tarjeta;
use Model\Usuario;
use Classes\Paginacion;
use Model\MembresiaPaciente;


Class DashboardController{

    public static function index(Router $router){
        if(!is_admin()){
            header('Location: /auth/login');
        }
        $pacientes = Usuario::all();
        $mensajes = Mensaje::all();
        $tarjetas = Tarjeta::all();
        $membresias = MembresiaPaciente::all();
       
        

        $router->render('/admin/dashboard/index', [
            'titulo'=> 'Panel de Administración',
            'pacientes' => $pacientes,
            'mensajes' => $mensajes,
            'tarjetas' => $tarjetas,
            'membresias' => $membresias,
           
            
        ]);
    }
    public static function pacientes(Router $router){

        if(!is_admin()){
            header('Location: /auth/login');
        }

       $pacientes = Usuario::all();

       if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $apellido = $_POST['terminoBusqueda'];
        $usuario = Usuario::where('apellido', $apellido);
        // debuguear($paciente);
       }

        // debuguear($ponentes);
       

        $router->render('/admin/dashboard/pacientes', [
            'titulo'=> 'Pacientes',
            'pacientes' => $pacientes,
            'usuario' => $usuario ?? '',
            // 'paginacion' => $paginacion->paginacion(),
            
        ]);
    }
    
    public static function tarjetas(Router $router){

        if(!is_admin()){
            header('Location: /auth/login');
        }

        
       $tarjetas = Tarjeta::all();
       if(count($_GET) !== 0){
        $codigo = $_GET['id'];
        $tarjeta = Tarjeta::where('codigo', $codigo);
       }
        // debuguear($tarjetas);
        
        $datos = [];
        if (count($_GET) !== 0) {
              $datos['tarjeta'] = $tarjeta;
            
            }
           
        // debuguear(variable: $tarjeta);

        $router->render('/admin/dashboard/tarjetas', [
            'titulo'=> 'Tarjetas',
            'tarjetas' => $tarjetas,
            // 'tarjeta' => $tarjeta,
            $datos,
            // 'paginacion' => $paginacion->paginacion(),
            
        ]);
    }
    
}
