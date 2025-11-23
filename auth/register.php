<?php session_start(); ?>
<!doctype html>
<html lang="es">

<head>
  <title>Registro - Digitaliza tu Factura</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../fonts/fontawesome/css/font-awesome.min.css">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      margin-top: 50px;
    }

    .wrap {
      border-radius: 15px;
      background: white;
      padding: 40px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .btn-info {
      background-color: #004080;
      border: none;
    }

    .btn-info:hover {
      background-color: #0059b3;
    }
  </style>
</head>

<body>

  <section class="ftco-section">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-6">

          <div class="wrap">

            <div class="text-center mb-4">
              <h1 class="mb-2">Registro</h1>
            </div>

            <form method="POST" action="../controllers/AuthController.php?action=register">
              <div class="form-group mb-3">
                <label class="label">NIT</label>
                <input type="text" name="nit" class="form-control">
              </div>

              <div class="form-group mb-3">
                <label class="label">Nombre del Negocio</label>
                <input type="text" name="negocio_nombre" class="form-control" required>
              </div>
              
              <div class="form-group mb-3">
                <label class="label">Nombre Completo</label>
                <input type="text" name="nombre_completo" class="form-control" required>
              </div>

              <div class="form-group mb-3">
                <label class="label">Correo</label>
                <input type="email" name="email" class="form-control" required>
              </div>

              <div class="form-group mb-3">
                <label class="label">Teléfono</label>
                <input type="text" name="telefono" class="form-control">
              </div>

              <div class="form-group mb-3">
                <label class="label">Dirección</label>
                <input type="text" name="direccion" class="form-control">
              </div>

              <div class="form-group mb-3">
                <label class="label">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
              </div>

              <div class="form-group mb-3">
                <label class="label">Rol</label>
                <select name="role" class="form-control">
                  <option value="propietario">Propietario</option>
                  <option value="cajero">Cajero</option>
                </select>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-info btn-block">
                  Registrarse
                </button>
              </div>

            </form>

            <div class="text-center mt-4">
              <p class="mb-0">¿Ya tienes cuenta?</p>
              <a href="login.php" class="btn btn-info">Iniciar Sesión</a>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>

</body>

</html>