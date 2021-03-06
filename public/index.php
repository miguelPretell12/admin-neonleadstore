<?php

require_once __DIR__.'/../include/app.php';

use Controllers\AdminController;
use Controllers\CategoriaController;
use Controllers\ColorController;
use Controllers\ProductoController;
use Controllers\ClienteController;
use Controllers\PrincipalController;
use Controllers\ProductoColorController;
use Controllers\GraficosController;
use Controllers\ConfiguracionController;
use MVC\Router;

$router = new Router();

//Zona Publica 
    $router->get('/login',[AdminController::class,'index']);
    $router->get('/dashboard',[AdminController::class,'dashboard']);

// Zona Privada
    $router->post('/login/verificar',[AdminController::class,'index1']);

//Color
    // method get
    $router->get('/color',[ColorController::class,'Color']);
    $router->get('/color/listar',[ColorController::class,'listarColor']);

    // method post
    $router->post('/color/eliminar',[ColorController::class,'eliminarColor']);
    $router->post('/color/guardar',[ColorController::class,'crearColor']);
    $router->post('/color/editar',[ColorController::class,'editColor']);
    $router->post('/color/getColor',[ColorController::class,'getColor']);

//Productos
    // method get
    $router->get('/producto',[ProductoController::class,'index']);
    $router->get('/producto/getCategoria',[ProductoController::class,'obtenerCat']);
    $router->get('/producto/getProducto',[ProductoController::class,'getProducto']);
    $router->get('/producto/prueba',[ProductoController::class,"listarP"]);

    // method post
    $router->post('/producto/crear',[ProductoController::class,'guardar']);
    $router->post('/producto/editar',[ProductoController::class,'actualizar']);
    $router->post('/producto/getProForm',[ProductoController::class,'getProductoId']);
    $router->post('/producto/estado',[ProductoController::class,"estado"]);
    $router->post("/producto/eliminar",[ProductoController::class,"eliminar"]);
    
//Categoria
    // method get
    $router->get('/categoria',[CategoriaController::class, 'index']);
    $router->get('/categoria/listar',[CategoriaController::class, 'listados']);

    // method post
    $router->post('/categoria/crear',[CategoriaController::class, 'crear']);
    $router->post('/categoria/estado',[CategoriaController::class,'cambiarEstado']);
    $router->post('/categoria/getCategoria',[CategoriaController::class,'getCategoria']);
    $router->post('/categoria/actualizar',[CategoriaController::class,'actualizar']);
    $router->post('/categoria/eliminar',[CategoriaController::class,'eliminar']);
  

//ProductoColor
    //method get
    $router->get('/productoColor',[ProductoColorController::class,'index']);
    $router->get('/productoColor/listar',[ProductoColorController::class,'listar']);
    $router->get('/productoColor/getProducto',[ProductoColorController::class,'getProducto']);
    $router->get('/productoColor/getColor',[ProductoColorController::class,'getColor']);
    
    //method post
    $router->post('/productoColor/create',[ProductoColorController::class,'create']);
    $router->post('/productoColor/update',[ProductoColorController::class,'update']);
    $router->post('/productoColor/delete',[ProductoColorController::class,'delete']);
    $router->post('/productoColor/obtener',[ProductoColorController::class,'obtener']);

//Cliente

    //RUTAS AUN NO PROTEGIDAS
    //method get 
    $router->get('/cliente',[ClienteController::class,'index']);
    $router->get('/cliente/listar',[ClienteController::class,'listar']); 
     //aun no implementado

    //method post
    $router->post('/cliente/getCliente',[ClienteController::class,'getCliente']);
    $router->post('/cliente/create',[ClienteController::class,'create']);
    $router->post('/cliente/estado',[ClienteController::class,'estado']); //aun no implementado
    $router->post('/cliente/update',[ClienteController::class,'update']); 
    $router->post('/cliente/delete',[ClienteController::class,'delete']);

// BotonConfiguracion
    // method get
    $router->get("/configuracion", [AdminController::class,'indexConfig']);
    $router->get("/configuracion/getData", [AdminController::class,'dataConfig']);
    
    // method post
    $router->post("/configuracion/verificar", [AdminController::class,'verificar']);
    $router->post("/configuracion/updatePassword", [AdminController::class,'updatePassword']);
    
// Cerrar Session - DASHBOARD
    //method get
    $router->get("/cerrar", [AdminController::class, 'cerrar']);

//graficos
    $router->get('/graficos',[GraficosController::class,'index']);


// Principal
        //METHOD GET
        $router->get("/", [PrincipalController::class,'index']);
        $router->get("/nosotros",[PrincipalController::class,'nosotros']);
        $router->get("/productos",[PrincipalController::class,'productos']);
        $router->get("/contacto",[PrincipalController::class,"contacto"]);
        $router->get("/servicios",[PrincipalController::class,"servicios"]);

        //formularios
        $router->get("/usuarioLogeo",[PrincipalController::class,"usuarioLogeo"]);
        $router->get("/usuarioRegistro",[PrincipalController::class,"usuarioRegistro"]);

       //METHOD POST
        $router->post("/contacto/enviar",[PrincipalController::class,"contactoEmail"]);
        $router->post("/landingpage/enviar",[PrincipalController::class,"contactolandingEmail"]);
    //Landig Page
    $router->get("/landingpage", [PrincipalController::class, 'landig']);



    $router->comprobarRutas();