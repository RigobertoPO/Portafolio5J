<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../img/unach.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="crearusuario.php" method="POST">

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

                  <div class="pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" 
                    type="submit" value="Guardar">
                  </div>
                </form>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>