<?php

namespace Controllers;

use Model\Cliente;
use MVC\Router;

class ClienteController {

    public static function index (Router $router){


        $router->render("dashboard/cliente",[]);
    }

    public static function listar(Router $router){

        $listado = Cliente::listar();
       
        $json = json_encode([
            "data" => $listado
        ]);
        echo $json;
    }



    public static function create(Router $router){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $cliente = new Cliente($_POST);
            $verificarCorreo = $cliente->verificarCorreo();
            if ($verificarCorreo->num_rows == 0) {
                $resultado = $cliente->crear(); //PROBLEMA, LO CREA PASANDO EL
                
                if($resultado) {
                    $listado = Cliente::listar();
                    $json = json_encode([
                        "STATUS"=>1,
                        "mensaje"=>"Registro Correcto",
                        "listas"=>$listado,
                        "c"=>$cliente
                    ]);
                }  else {
                    $json = json_encode([
                        "STATUS"=>2,
                        "mensaje"=>"Error al registrar"
                    ]);
                }
            }
            //ya existe
            else {
                $json = json_encode ([
                    "STATUS"=>2,
                    "mensaje"=>"Este correo ya existe!!!",
                    "c"=>$cliente
                ]);   
            }
            echo $json;
        }
    }
    
    public static function getCliente(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ // Hay triple =
            $id = $_POST['id'];
            $cliente = Cliente::find($id);
            $json = json_encode([
                "data"=>$cliente
            ]);
            
            echo $json;
        }
    }

    public static function delete(Router $router){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            $cliente = Cliente::find($id);
            $el = $cliente->eliminar();
            $json = json_encode($el);
        
            echo $json;
        }
    }

    public static function update(){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $cliente = Cliente::find($_POST['id']);
            $cliente->sincronizar($_POST);

            $dd = $cliente->actualizar();

            $json = json_encode($dd);

            echo $json;
        }
        
    }

    public static function estado()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cliente = new Cliente($_POST);        

        if ($cliente->cli_estado == "1") {

            $cliente->cli_estado = "0";
            $resultado = $cliente->editEstado();

        } else {
            $cliente->cli_estado = "1";
            $resultado = $cliente->editEstado();
        }
        //ESTO SIRVE NO ES UN SOLO IMPRIMIR
        echo json_encode([
            "cli_estado" => $cliente->cli_estado,
            "resultado" => $resultado
        ]);

        }
    }
}