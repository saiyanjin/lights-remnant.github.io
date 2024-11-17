<!doctype html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/logo.jpg">
    <title>Light's Remnant</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

    <!-- NAVBAR -->
     
    <?php include 'navbar.php'; ?>

    <!-- FIN NAVBAR -->

    <!-- HOME  -->

    <div id="home" class="bg-black d-flex justify-content-center align-items-center text-white" style="height: 80vh">
      <h6 class="h-dl"><a href="#" class="btn-dl text-decoration-none">JOUEZ GRATUITEMENT</a></h6>
    </div>

    <!-- FIN HOME -->

    <!-- ACTUS -->

    <div id="actus" class="" style="height: 60vh;">
      <div class="actu-affiche pt-5">
        <h2 class="fw-bold fst-italic mb-4 text-start">ACTUS À L'AFFICHE</h2>
        <div class="d-flex align-items-between justify-content-between">
          <div class="me-3 pointer">
            <span class="d-block overflow-hidden"><img src="images/test.jpg" alt="Image 1" class="img-fluid img-actu"></span>
            <p class="info-actu mt-3 mb-0"><span class="fw-bold type-actu">ACTUALITÉS </span> | 25/10/2024</p>
            <h5 class="fw-bold mt-3">Avancée du projet</h5>
            <p>Suivez l'avancée du projet en détail.</p>
          </div>
          <div class="mx-3 d-none d-sm-block pointer">
            <span class="d-block overflow-hidden"><img src="images/test.jpg" alt="Image 2" class="img-fluid img-actu"></span>
            <p class="info-actu mt-3 mb-0"><span class="fw-bold type-actu">RÉSEAUX </span> | 24/10/2024</p>
            <h5 class="fw-bold mt-3">Avancée du projet</h5>
            <p>Suivez l'avancée du projet en détail.</p>
          </div>
          <div class="ms-3 d-none d-xxl-block pointer">
            <span class="d-block overflow-hidden"><img src="images/test.jpg" alt="Image 3" class="img-fluid img-actu"></span>
            <p class="info-actu mt-3 mb-0"><span class="fw-bold type-actu">MÉDIA </span> | 28/10/2024</p>
            <h5 class="fw-bold mt-3">Avancée du projet</h5>
            <p>Suivez l'avancée du projet en détail.</p>
          </div>
        </div>
      </div>
    </div>


    <!-- FIN ACTUS -->

    <!-- UNIVERS -->

    <div id="univers" class="bg-white vh-100 d-flex justify-content-center align-items-center">
      <div class="container text-center">
        <div class="row">
          <div class="col" style="border:1px solid red">
            Column
          </div>
          <div class="col" style="border:1px solid blue">
            Column
          </div>
        </div>
      </div>
    </div>

    <!-- FIN UNIVERS -->

    <!-- FOOTER -->

    <?php include 'footer.php'; ?>

    <!-- FIN FOOTER -->

    <!-- SCRIPT -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>

  </body>
</html>