<?php
    $id=$_GET['id'];
    include_once '../Core/Usuario.php';
    $user=new Usuario();
    $resultado=$user->EliminarUsuario($id);
    if($resultado==true){
        header("Location: administrarusuarios.php");
    }

?>