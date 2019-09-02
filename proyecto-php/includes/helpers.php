<?php
//Librería con las funciones PHP
//le estoy pasando el array de errores y le paso el campo (yo le estoy pasando - string)
//necesitamos pasarle dos parametros $errores y $campo
function mostrarError($errores, $campo){
    //por defecto alerta irá vacia
    $alerta='';
    if(isset($errores[$campo]) && !empty($campo)){
        //voy a mostrar el error accediendo a la posicion del array en concreto que quiero
        $alerta="<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
    //en caso de que haya un error
    return $alerta;
}

//borramos los errores una vez que terminanos de mostrarlos por primera vez
function borrarErrores(){    
    $borrado=false;
    
    if(isset($_SESSION['errores'])){
        $_SESSION['errores']=null;
        $borrado=true;
        //$borrado=session_unset($_SESSION['errores']);
    }

    if(isset($_SESSION['errores_entrada'])){
        //sólo doy un valor nulo a esa sesión para que no me muestre los errores
        $_SESSION['errores_entrada']=null;
        $borrado=true;      
    }
    
    if(isset($_SESSION['completado'])){
        $_SESSION['completado']=null;
        $borrado=true;
        //$borrado=session_unset($_SESSION['completado']);
    }
    
    return $borrado;
}

function conseguirCategorias($conexion){
    $sql="SELECT * FROM categorias ORDER BY id ASC;";
    //ejecutamos la consulta
    $categorias=mysqli_query($conexion, $sql);
    //$result=false;
    //en vez de false coloco un array vacio
    $result=array();
    if ($categorias && mysqli_num_rows($categorias)>=1) {
        $result=$categorias;
    }
    //puede devolver un array vacio o el array de categorias
    return $result;    
}

function conseguirCategoria($conexion, $id){
    $sql="SELECT * FROM categorias WHERE id=$id;";
    //ejecutamos la consulta
    $categorias=mysqli_query($conexion, $sql);
    //$result=false;
    //en vez de false coloco un array vacio
    $result=array();
    if ($categorias && mysqli_num_rows($categorias)>=1) {
        $result=mysqli_fetch_assoc($categorias);
    }
    //puede devolver un array vacio o el array de categorias
    return $result;    
}

function conseguirUltimasEntradas($conexion){
    $sql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id ORDER BY e.id DESC limit 4";
    //ejecutamos la consulta
    $entradas=mysqli_query($conexion, $sql);
    $result=array();
    if ($entradas && mysqli_num_rows($entradas)>=1){
        $result=$entradas;
    }
    return $result;
}

function conseguirEntradas($conexion, $categoria=null){
    $sql="SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id ";
    if (!empty($categoria)) {
        $sql.="WHERE e.categoria_id=$categoria ";
    }
    $sql.="ORDER BY e.id DESC";
    
    //echo $sql;
    //die();
    //ejecutamos la consulta
    $entradas=mysqli_query($conexion, $sql);
    $result=array();
    if ($entradas && mysqli_num_rows($entradas)>=1){
        $result=$entradas;
    }
    return $result;
}