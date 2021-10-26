<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="stule.css">
    <title>Porfolio</title>
</head>



<body class="bg-1">

    <!-- NAVAGACION -->

                 <?php
                include 'navbar.php'; 
                ?>

    <!-- CUERPO MAIN -->

    <main>
        <div class="container shadow colorbtn bordes pb-5 h-100">
            <DIV class="">
                <div class="text-center text-white ">

                <section class=" gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">armar tarjeta</h2>
              <p class="text-white-50 mb-5">complete los campos </p>

              <form action="tarjeta.php" method="POST">

              <div class="form-outline form-white mb-4">
                <input type="nombre"  class="form-control form-control-lg" name="nombre" />
                <label class="form-label">Nombre</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="nombre"  class="form-control form-control-lg" name="apellido" />
                <label class="form-label">apellido</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="nombre"  class="form-control form-control-lg" name="profesion" />
                <label class="form-label">Profesion</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="nombre" class="form-control form-control-lg" name="descripcion" />
                <label class="form-label">Descripcion</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">tarjeta</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                </div>
            </div>
        </DIV>
    </main>

    <!-- footer -->

    <footer class="d-flex justify-content-between align-items-center pt-3 mt-5 footerbg text-white ">
        <div>
            
        </div>
        <div>
            <p class="fw-bold">Franco Mercado </p>
        </div>
        <div>
        </div>
    </footer>
</body>

</html>