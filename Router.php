<?php

namespace MVC;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function comprobarRutas()
    {

        $url_actual = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->getRoutes[$url_actual] ?? null;
        } else {
            $fn = $this->postRoutes[$url_actual] ?? null;
        }

        if ( $fn ) {
            call_user_func($fn, $this);
        } else {
            header('Location: /inicio/404');
        }
    }

    public function render($view, $datos = [])
    {
        foreach ($datos as $key => $value) {
            $$key = $value; 
        }

        ob_start(); 

        include_once __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean(); // Limpia el Buffer

        //Utilizar el layout de acuerdo a la url
        $url_actual = $_SERVER['PATH_INFO'] ?? '/';
        // debuguear($url_actual);
        if(str_contains($url_actual, '/admin')){

            include_once __DIR__ . '/views/admin-layout.php';
        }elseif(str_contains($url_actual, '/auth')){
            include_once __DIR__ . '/views/auth-layout.php';
        }else{

            include_once __DIR__ . '/views/layout.php';
        }

        

    }
}
