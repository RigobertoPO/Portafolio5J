<?php
    session_start();
    if(isset($_SESSION["correoUsuario"])){
        $correoUsuario= $_SESSION["correoUsuario"];
        $tipoUsuario= $_SESSION["tipoUsuario"];
    }
    else{
        $correoUsuario= '';
        $tipoUsuario= '';
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio</title>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <!--Menu-->
        <nav id="navbar">
            <div class="contenedor">
                <img src="img/logo.png" alt="Logo" class="logotipo"/>
                <ul class="textoBoton" >
                    <li><a href="index.php" class="Seleccionado">Inicio</a></li>
                    <li><a href="quien.php">Quien soy</a></li>
                    <?php
                    if(($correoUsuario!='') && $tipoUsuario==1)
                    {
                       echo '<li><a href="Administracion/portafolio.php">PortaFolio</a></li>';
                       echo '<li><a href="Administracion/pedidos.php">Pedidos</a></li>';
                    }
                    ?>
                    <li><a href="blog.php">blog</a></li>
                    <li><a href="contacto.php">Contactos</a></li>
                    <li>
                        <?php
                        if($correoUsuario==''){
                            echo ' <a class="sesion" 
                            href="login.php">Iniciar sesión</a>';
                        }
                        else{
                            echo '<p>'.$correoUsuario.'</p>';
                            echo '<a class="sesion" 
                            href="cerrarSesion.php">Cerrar Sesión</a>';
                        }
                        ?> 
                    </li>
                </ul>          
            </div>
        </nav> 
       <div id="mostrarSlider">
        <div class="Slider-banner">
            <h1>ADMINISTRAR USUARIOS</h1>
            <p class="large">Rigoberto Pérez Ovando</p>
        </div>
       </div>
   </header>
  
   <section id="Portafolio">
   <form action="guardarusuario.php" method="POST">

<div class="d-flex align-items-center mb-3 pb-1">
  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
  <span class="h1 fw-bold mb-0">Mi portafolio</span>
</div>

<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa con tu cuenta</h5>
<div class="form-outline mb-4">
  <input type="text" id="form2Example17" class="form-control form-control-lg" name="nombre" />
  <label class="form-label" for="form2Example17">Nombre completo</label>
</div>

<div class="form-outline mb-4">
  <input type="email" id="form2Example17" class="form-control form-control-lg" name="correo" />
  <label class="form-label" for="form2Example17">Correo electrónico</label>
</div>

<div class="form-outline mb-4">
  <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
  <label class="form-label" for="form2Example27">Password</label>
</div>
<div class="form-outline mb-4">
  <select name="tipo" class="form-control form-control-lg">
    <option value="1">Administrador</option>
    <option value="2">Cliente</option>
  </select>
  <label class="form-label" for="form2Example27">Tipo</label>
</div>
<div class="pt-1 mb-4">
  <input class="btn btn-dark btn-lg btn-block" 
  type="submit" value="Guardar">
</div>
</form>
   </section>
  
  <footer>
      <p>universidad</p>
  </footer>
</body>
</html>