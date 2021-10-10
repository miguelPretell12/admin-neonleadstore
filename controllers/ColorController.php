<?php 


namespace Controllers;
use Model\Color;
use MVC\Router;

class ColorController {
    public static function listarColor(Router $router){

        $listado = Color::listar();
        
        $json = json_encode([
            "listado" => $listado
        ]);
        $router->renderAjax("verificar",[
            "json"=>$json
        ]);
    }

    public static function Color(Router $router){
        $router->render("dashboard/color",[]);
    }

    public static function crearColor(Router $router){
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $color = new Color($_POST);
            
            $verificarNombre = $color->verificarNombreColor();
            //$json = json_encode($verificarNombre);
            if($verificarNombre->num_rows == 0){
                $resultado = $color->crear();
                if($resultado){
                    $listado = Color::listar();
                    $json = json_encode([
                        "STATUS"=>1,
                        "mensaje"=>"Registro correctamente",
                        "listas"=>$listado
                    ]);
                } else {
                    $json = json_encode([
                        "STATUS"=>2,
                        "mensaje"=>"Error al registrar"
                    ]);
                }
            }else {
                $json = json_encode([
                    "STATUS"=>3,
                    "mensaje"=>"Nombre del color ya registrado"
                ]);
            }
            
        }
        
        $router->renderAjax("verificar",[
            "json"=>$json
        ]);
    }

    public static function editColor(Router $router){
        $color = new Color();
        $color->sincronizar($_POST);

        $dd = $color->actualizar();

        $json = json_encode($dd);

        $router->renderAjax("verificar",[
            "json"=>$json
        ]);
    }

    public static function buscarNombre(Router $router) {
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = $_POST['nombre'];
            $listar = Color::listarNombre($nombre);
            $json = json_encode([
                "resp"=>$listar
            ]);
        }
        $router->renderAjax("verificar",["json"=>$json]);
    }

    public static function getColor(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
            $color = Color::find($id);

            $json = json_encode([
                "color"=>$color
            ]);
        }

        $router->renderAjax('verificar',[
            "json"=>$json
        ]);
    }

    public static function eliminarColor(Router $router){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            $color = Color::find($id);
            $el = $color->eliminar();
            $json = json_encode($el);
        }
        $router->renderAjax('verificar',[
            "json"=>$json
        ]);
    }
}