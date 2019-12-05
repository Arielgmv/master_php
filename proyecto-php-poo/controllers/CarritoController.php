<?php
require_once 'models/producto.php';

class carritoController{
    public function index(){
        var_dump($_SESSION['carrito']);
        echo "Controlador Carrito, Acción Index";
    }

    public function add(){
        if(isset($_GET['id'])){
            $producto_id = $_GET['id'];
        }else{
            header('Location:'.base_url);
        }
       
        if(isset($_SESSION['carrito'])) {
           
        }else{
            //Conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            if(is_object($producto)){
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => 1
                );
            }            
        }

        header("Location:".base_url."Carrito/index");
    }

    public function remove(){
        
    }

    public function delete(){
        
    }
}