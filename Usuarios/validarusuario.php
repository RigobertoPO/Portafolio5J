<?php
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    include_once '../Core/Usuario.php';
    $usuario=new Usuario();
    if(isset($correo)&& isset($password)){
        $resultado=$usuario->
        AutenticarUsuario($correo,MD5($password));
        if(count($resultado)>0){
            foreach($resultado as $item){
                session_start();
                $_SESSION["idUsuario"] = $item['Id']; 
                $_SESSION["correoUsuario"] = 
                $item['CorreoElectronico'];  
                $_SESSION["tipoUsuario"] = $item['Tipo'];   
                header("Location: ../index.php");
            }
        }
        else{
            header("Location: ../login.php");
        }
    }
    else{
        header("Location: ../login.php");
    }
    
?>