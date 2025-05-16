<?php

namespace Controllers;

use Classes\Email;
use Model\Usuario;
use MVC\Router;

class AuthController {
    public static function login(Router $router) {

        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            $usuario = new Usuario($_POST);

            $alertas = $usuario->validarLogin();
            
            if(empty($alertas)) {
                // Verificar quel el usuario exista
                $usuario = Usuario::where('email', $usuario->email);
                if(!$usuario || !$usuario->confirmado ) {
                    Usuario::setAlerta('error', 'El Usuario No Existe o no esta confirmado');
                } else {
                    // El Usuario existe
                    if( password_verify($_POST['password'], $usuario->password) ) {
                        if(!isset($_SESSION)){
                            session_start();
                            }
                        // Iniciar la sesión  
                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre;
                        $_SESSION['apellido'] = $usuario->apellido;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['admin'] = $usuario->admin ?? null;

                        if($usuario->admin){
                            header('Location: /admin/dashboard');
                        }else{
                            header('Location: /');
                        }
                        
                    } else {
                        Usuario::setAlerta('error', 'Password Incorrecto');
                    }
                }
            }
        }

        $alertas = Usuario::getAlertas();
        
        // Render a la vista 
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas' => $alertas
        ]);
    }

    public static function logout() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(!isset($_SESSION)){
                session_start();
                }
            $_SESSION = [];
            header('Location: /');
        }
       
    }

    // public static function registro(Router $router) {
    //     $alertas = [];
    //     $usuario = new Usuario;

    //     if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //         $usuario->sincronizar($_POST);
    //         $alertas = $usuario->validar_cuenta();

    //         //Revisar que alerta este vacio
    //         if(empty($alertas)){
    //             // Verificar que el usuario no este registrado
    //             $resultado = $usuario->existeUsuario();

    //             if($resultado->num_rows){
    //                 $alertas = Usuario::getAlertas();
    //             }else{
    //                 //El usuario no esta registrado
    //                 // Hashear el password
    //                 $usuario->hashPassword();

    //                 // Generar uh token único
    //                 $usuario->crearToken();

    //                 // Enviar el email
    //                 // $email = new Email($usuario->email, $usuario->nombre, $usuario->apellido, $usuario->token);

    //                 // $email->enviarConfirmacion();
    //                 // Confirmar usuario
    //                 $usuario->confirmado = 1;

    //                 // Crear usuario o cliente
    //                 $resultado = $usuario->guardar();

    //                 if($resultado){
    //                     header('Location: /');
    //                 }


    //                 // debuguear($usuario);
                    
    //             }
    //         }
    //     }

    //     // Render a la vista
    //     $router->render('auth/registro', [
    //         'titulo' => 'Crea tu cuenta',
    //         'usuario' => $usuario, 
    //         'alertas' => $alertas
    //     ]);
    // }

    public static function olvide(Router $router) {
        $alertas = [];

        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario($_POST);
            if(empty($alertas)) {
                // Buscar el usuario
                $usuario = Usuario::where('email', $usuario->email);
                
                if($usuario && $usuario->confirmado) {
                    $usuario->token = '';
                    // Generar un nuevo token
                    $usuario->crearToken();
                    
                    // Actualizar el usuario
                    $resultado = $usuario->guardar();
                    if($resultado){
                        header('Location: /auth/reestablecer?token=' . $usuario->token);
                    }
                } else {
                 
                    // Usuario::setAlerta('error', 'El Usuario no existe o no esta confirmado');

                    $alertas['error'][] = 'El Usuario no esta registrado en nuestra base de datos';
                }
                
            }
        }

        // Muestra la vista
        $router->render('auth/olvide', [
            'titulo' => 'Olvide mi Password',
            'alertas' => $alertas
        ]);
    }

    public static function reestablecer(Router $router) {

        $token = s($_GET['token']);

        $token_valido = true;

        if(!$token) header('Location: /');

        // Identificar el usuario con este token
        $usuario = Usuario::where('token', $token);

        if(empty($usuario)) {
            Usuario::setAlerta('error', 'Token No Válido, intenta de nuevo');
            $token_valido = false;
        }


        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Añadir el nuevo password
            $usuario->sincronizar($_POST);
            // Validar el password
            $alertas = $usuario->validarPassword();
            
            if(empty($alertas)) {
                // Hashear el nuevo password
                $usuario->hashPassword();
                
                // Eliminar el Token
                $usuario->token = null;
                // debuguear($usuario);

                // Guardar el usuario en la BD
                $resultado = $usuario->guardar();

                // Redireccionar
                if($resultado) {
                    header('Location: /');
                }
            }
        }

        $alertas = Usuario::getAlertas();
        
        // Muestra la vista
        $router->render('auth/reestablecer', [
            'titulo' => 'Reestablecer Password',
            'alertas' => $alertas,
            'token_valido' => $token_valido
        ]);
    }

    // public static function mensaje(Router $router) {

    //     $router->render('auth/mensaje', [
    //         'titulo' => 'Cuenta Creada Exitosamente'
    //     ]);
    // }

    // public static function confirmar(Router $router) {
        
    //     $token = s($_GET['token']);

    //     if(!$token) header('Location: /');

    //     // Encontrar al usuario con este token
    //     $usuario = Usuario::where('token', $token);

    //     if(empty($usuario)) {
    //         // No se encontró un usuario con ese token
    //         Usuario::setAlerta('error', 'Token No Válido');
    //     } else {
    //         // Confirmar la cuenta
    //         $usuario->confirmado = 1;
    //         $usuario->token = '';
    //         unset($usuario->password2);
            
    //         // Guardar en la BD
    //         $usuario->guardar();

    //         Usuario::setAlerta('exito', 'Cuenta Comprobada Correctamente');
    //     }

     

    //     $router->render('auth/confirmar', [
    //         'titulo' => 'Confirma tu cuenta DevWebcamp',
    //         'alertas' => Usuario::getAlertas()
    //     ]);
    // }
}