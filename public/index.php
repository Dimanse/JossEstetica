<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\InicioController;
use Controllers\TarjetaController;
use Controllers\MensajesController;
use Controllers\DashboardController;
use Controllers\MembresiaController;
use Controllers\PacientesController;

$router = new Router();


// Login
$router->get('/auth/login', [AuthController::class, 'login']);
$router->post('/auth/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/auth/registro', [AuthController::class, 'registro']);
$router->post('/auth/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/auth/olvide', [AuthController::class, 'olvide']);
$router->post('/auth/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/auth/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/auth/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
// $router->get('/auth/mensaje', [AuthController::class, 'mensaje']);
// $router->get('/auth/confirmar-cuenta', [AuthController::class, 'confirmar']);

//Area Privada
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

$router->get('/admin/pacientes', [DashboardController::class, 'pacientes']);
$router->post('/admin/pacientes', [DashboardController::class, 'pacientes']);


$router->get('/admin/tarjetas', [DashboardController::class, 'tarjetas']);

$router->get('/admin/tarjeta/show', [TarjetaController::class, 'showTarjeta']);

$router->post('/admin/tarjeta/eliminar', [TarjetaController::class, 'eliminar']);

$router->get('/admin/socios', [DashboardController::class, 'socios']);


// pacientes

$router->get('/admin/paciente/crear', [PacientesController::class, 'crear']);
$router->post('/admin/paciente/crear', [PacientesController::class, 'crear']);

$router->get('/admin/paciente/editar', [PacientesController::class, 'editarPaciente']);
$router->post('/admin/paciente/editar', [PacientesController::class, 'editarPaciente']);


$router->get('/admin/paciente/show', [PacientesController::class, 'showPaciente']);

$router->post('/admin/paciente/eliminar', [PacientesController::class, 'eliminar']);

//Mensajes
$router->get('/admin/mensajes', [MensajesController::class, 'index']);

$router->post('/admin/mensaje/eliminar', [MensajesController::class, 'eliminar']);

// Membresia
$router->get('/admin/membresias', [MembresiaController::class, 'show']);
$router->post('/admin/membresias', [MembresiaController::class, 'show']);
$router->get('/admin/membresia/paciente', [MembresiaController::class, 'index']);
$router->post('/admin/membresia/paciente', [MembresiaController::class, 'index']);
$router->post('/admin/membresia/eliminar', [MembresiaController::class, 'eliminar']);



//Tarjetas

$router->get('/tarjeta/show', [TarjetaController::class, 'showTarjeta']);


// Aréa Pública

$router->get('/', [InicioController::class, 'index']);

$router->get('/contacto', [InicioController::class, 'contacto']);
$router->post('/contacto', [InicioController::class, 'contacto']);
$router->post('/contacto', [InicioController::class, 'contacto']);
$router->post('/contacto', [InicioController::class, 'contacto']);

$router->get('/membresia', [InicioController::class, 'membresia']);
$router->post('/membresia', [InicioController::class, 'membresia']);

$router->get('/tarjeta', [InicioController::class, 'tarjeta']);
$router->post('/tarjeta', [InicioController::class, 'tarjeta']);

$router->get('/servicios', [InicioController::class, 'servicios']);
$router->get('/estetica', [InicioController::class, 'estetica']);
$router->get('/404', [InicioController::class, 'error']);

$router->comprobarRutas();