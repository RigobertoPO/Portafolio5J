<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $tipo=$_POST['tipo'];
if(isset($nombre) && isset($correo) && isset($password)){
include_once "../Core/Usuario.php";
$usuario=new Usuario();
$respuesta=$usuario->InsertarUsuario($nombre,$correo,md5($password),$tipo);
if($respuesta==true){
    echo "<script>alert('Registro Exitoso');</script>";
    header("Location: administrarusuarios.php");
}
}
else{
    header("Location: registrarusuario.php");
}
?>