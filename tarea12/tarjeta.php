<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="stule.css" />
    <title>Porfolio</title>
  </head>

  <body class="bg-1 ">
    <!-- NAVAGACION -->

    <?php
                include 'navbar.php'; 
                ?>

    <!-- CUERPO MAIN -->

      <div class="container shadow colorbtn bordes pb-5">
          <div class="row justify-content-center">
        <div class="col-12 col-lg-3 text-white text-center bordes m-5 bg-dark">
          <h1 class="p-4">Tu tarjeta</h1>
          <hr>
          <i class="bi bi-person-circle display-1"></i>
          <h3 class="p-4"><?php echo $_POST["nombre"] ," ", $_POST["apellido"];?></h3>
          <hr>
          <H4><?php echo $_POST["profesion"];?> </H4>
          <hr>
          <p><?php echo $_POST["descripcion"];?></p>
        </div></div>
      </div>

    <!-- footer -->

    <footer
      class="
        d-flex
        justify-content-between
        align-items-center
        pt-3
        mt-5
        footerbg
        text-white
      "
    >
      <div></div>
      <div>
        <p class="fw-bold">Franco Mercado</p>
      </div>
      <div></div>
    </footer>
  </body>
</html>
