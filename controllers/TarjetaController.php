<?php

namespace Controllers;


use MVC\Router;
use Model\Masage;
use Model\Tarjeta;
use Model\Usuario;
use Model\Porcentaje;



Class TarjetaController{
    public static function showTarjeta(Router $router){

        if(!is_auth()){
            header('Location: /auth/login');
        }
        // $id = $_SESSION['id'];
        // $paciente = Usuario::find($id);

        // if($_GET['token']){

            $token = trim($_GET['token']);
            
                $tarjeta = Tarjeta::where('codigo', $token);
                $masaje = Masage::find($tarjeta->masaje_id);
                $paciente = Usuario::find($tarjeta->user_id);
                $porcentaje = Porcentaje::find($tarjeta->porcentaje_id);
        
                $descuento = ($masaje->precio*$porcentaje->numero) / 100;
        
                $total = $masaje->precio - $descuento;
        // }
        
        
        // debuguear($token);
        


        $router->render('/admin/dashboard/showTarjeta', [
            'titulo' => 'Tarjeta exclusiva' ,
            'tarjeta' => $tarjeta,
            'paciente' => $paciente,
            'masaje' =>  $masaje,
            'descuento' => $descuento,
            'porcentaje' => $porcentaje,
            'total' => $total
           
            
            
        ]);
    }
    public static function eliminar(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!is_admin()){
                header('Location: /auth/login');
            }
            $id = $_POST['id'];
            $tarjeta = Tarjeta::find($id);

            if(!isset($tarjeta)){
                header('Location: /admin/tarjetas');
            }

            $resultado = $tarjeta->eliminar();
            if($resultado){
                header('Location: /admin/tarjetas');

            }
            // debuguear($ponente);
        }
    }


}