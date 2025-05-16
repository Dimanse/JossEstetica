<?php

namespace Controllers;

use DateTime;
use MVC\Router;
use DateTimeZone;
use Model\Mensaje;
use Model\Usuario;
use Classes\Paginacion;


Class MensajesController{

    public static function index(Router $router){

        if(!is_admin()){
            header('Location: /auth/login');
        }

        $pagina_actual = $_GET['page'];
        $pagina_actual = filter_var($pagina_actual, FILTER_VALIDATE_INT);
        // debuguear($pagina_actual);
        if(!$pagina_actual || $pagina_actual < 1){
            header('Location: /admin/mensajes?page=1');
        }
        
        $registros_por_pagina = 10;
        $total_registros = Usuario::total();
        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total_registros);

        if($paginacion->total_paginas() < $pagina_actual){
            header('Location: /admin/mensajes?page=1');
        }
        // debuguear($paginacion->pagina_siguiente());
        $mensajes = Mensaje::paginar($registros_por_pagina, $paginacion->offset());

        

        $router->render('/admin/dashboard/mensajes', [
            'titulo'=> 'Buzón de Entrada',
            'mensajes' => $mensajes,
            'paginacion' => $paginacion->paginacion(),
            
        ]);
    }
    
    
    
    public static function eliminar(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /auth/login');
            }
            $id = $_POST['id'];
            $mensaje = Mensaje::find($id);
            // debuguear($mensaje);
            

            if(!isset($mensaje)){
                header('Location: /admin/mensajes');
            }

            $resultado = $mensaje->eliminar();
            if($resultado){
                header('Location: /admin/mensajes');

            }
            // debuguear($ponente);
        }
    }
}