<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
if(isset($nombre) && isset($correo) && isset($password)){
include_once "../Core/Usuario.php";
$usuario=new Usuario();
$respuesta=$usuario->InsertarUsuario($nombre,$correo,md5($password),2);
if($respuesta==true){
    echo "<script>alert('Registro Exitoso');</script>";
    header("Location: ../login.php");
}
}
else{
    header("Location: registrarusuario.php");
}
?>