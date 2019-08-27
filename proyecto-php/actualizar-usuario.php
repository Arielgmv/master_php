<?php
//conexion a la base de datos e inicio de sesion, lo colocamos dentro del if, se carga
//si solo existe $_POST
if(isset($_POST['submit'])){
    //Conexion a la base de datos
    require_once 'includes/conexion.php';
 
    //Recoger los valores del formulario de actualización
    $nombre=isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos=isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    //trim para que se guarde sin espacios
    $email=isset($_POST['email']) ? mysqli_real_escape_string ($db, trim($_POST['email'])) : false;
    /*var_dump($nombre);
    die();*/
    //Array de errores
    $errores=array();
    
    //Validar los datos antes de guardarlos en la base de datos
    //Validar campo nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        //echo "el nombre es valido";
        $nombre_validado=true;
    }else {
        //echo $errores['nombre']="El nombre no es valido";
        $nombre_validado=false;
        $errores['nombre']="El nombre no es valido";
    }
    //Validar campo apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado=true;
    }else {
        $apellidos_validado=false;
        $errores['apellidos']="Los apellidos no son validos";
    }
    //Validar campo email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado=true;
    }else {
        $email_validado=false;
        $errores['email']="El email no es valido";
    }
    $guardar_usuario=false;
    $usuario=$_SESSION['usuario'];
    if(count($errores)==0){
        $guardar_usuario=true;
        //comprobar si el email ya existe
        $sql="SELECT id, email FROM usuarios WHERE email='$email'";
        $isset_email=mysqli_query($db, $sql);
        $isset_user=mysqli_fetch_assoc($isset_email);

        if($isset_user['id']==$usuario['id']|| empty($isset_user)){
            //Actualizar el usuario en la tabla usuarios de la BBD
            
            $sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', email='$email' WHERE id= ".$usuario['id'];
            $guardar=mysqli_query($db, $sql);
            if($guardar){
                $_SESSION['usuario']['nombre']=$nombre;
                $_SESSION['usuario']['apellido']=$apellidos;
                $_SESSION['usuario']['email']=$email;
                //creamos una variable de sesion completado
                $_SESSION['completado']='Tus datos se han actualizado con exito';
            }else{
                //si no, que me anhada en el array de errores, un indice que sea general 
                $_SESSION['errores']['general']='Fallo al actualizar tus datos';
            }
        }else {
            $_SESSION['errores']['general']='El usuario ya existe';
        }
    }else {
        $_SESSION['errores']=$errores;        
    }
}
//se hace una redireccion al index.php, una vez se haya ejecutado
//todo el codigo
header('Location: mis-datos.php');