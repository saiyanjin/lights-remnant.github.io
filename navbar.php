<!-- NAVBAR -->
     
<div class="sticky-top bg-nav position-fixed w-100">

    <!-- NORMAL -->

    <ul class="list-unstyled d-xl-flex justify-content-center align-items-center sticky-top bg-nav d-none">
      <li class="mx-5 w-100">
        <a href="#home" class="mx-3"><img src="images/logo.jpg" class="rounded" style="height: 50px; width: 50px"></a>
        <a href="#jeu" class="fw-bolder text-decoration-none color-nav mx-3 pb-3 hover-nav-bot"><span class="p-2 rounded hover-nav">LE JEU</span></a>
        <a href="#univers" class="fw-bolder text-decoration-none color-nav mx-3 pb-3 hover-nav-bot"><span class="p-2 rounded hover-nav">L'UNIVERS</span></a>
        <a href="#actualites" class="fw-bolder text-decoration-none color-nav mx-3 pb-3 hover-nav-bot"><span class="p-2 rounded hover-nav">ACTUALITÉS</span></a>
        <a href="#support" class="fw-bolder text-decoration-none color-nav mx-3 pb-3 hover-nav-bot"><span class="p-2 rounded hover-nav">SUPPORT</span></a>
        <a href="#reseaux" class="fw-bolder text-decoration-none color-nav mx-3 pb-3 hover-nav-bot"><span class="p-2 rounded hover-nav">NOS RÉSEAUX</span></a>
      </li>
      <li class="mx-5 d-inline-flex align-items-center">
        <span class="p-2 ps-3 pe-3 mx-3"><img id="beaconImage" src="images/beacon_off.png" height="35" width="35" class="grab-cursor"></span>
        <a href="#reseaux" class="fw-bolder text-decoration-none color-nav me-3"><span class="p-2 ps-3 pe-3 rounded btn-jouer">JOUER</span></a>
      </li>
    </ul>

    <!-- FIN NORMAL -->

    <!-- RESPONSIVE -->

    <div class="d-xl-none ps-3 pt-3">
      <ul class="list-unstyled d-flex">
        <li class="ms-2 w-100">
          <a href="#home" class="mx-3"><img src="images/logo.jpg" class="rounded" style="height: 50px; width: 50px"></a>
        </li>
        <li class="mx-5">
          <button class="btn d-flex align-items-center btn-nav-red rounded-4 fw-bolder" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-list " viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
          
          <div class="offcanvas offcanvas-end bg-nav-bis" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header mt-2 me-2">
              <button type="button" class="btn-close btn-close-white btn-close-bg-transparent" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <p><a href="#home" class="mx-3"><img src="images/logo.jpg" class="rounded" style="height: 50px; width: 50px"></a></p>
              <p class="my-5"><a href="#jeu" class="fw-bolder text-decoration-none color-nav mx-3 hover-nav-bot"><span class="p-2 rounded hover-nav">LE JEU</span></a></p>
              <p class="my-5"><a href="#univers" class="fw-bolder text-decoration-none color-nav mx-3 hover-nav-bot"><span class="p-2 rounded hover-nav">L'UNIVERS</span></a></p>
              <p class="my-5"><a href="#actualites" class="fw-bolder text-decoration-none color-nav mx-3 hover-nav-bot"><span class="p-2 rounded hover-nav">ACTUALITÉS</span></a></p>
              <p class="my-5"><a href="#support" class="fw-bolder text-decoration-none color-nav mx-3 hover-nav-bot"><span class="p-2 rounded hover-nav">SUPPORT</span></a></p>
              <p class="my-5"><a href="#reseaux" class="fw-bolder text-decoration-none color-nav mx-3 hover-nav-bot"><span class="p-2 rounded hover-nav">NOS RÉSEAUX</span></a></p>
            </div>
            <a href="#reseaux" class="text-decoration-none mx-3 mb-5">
              <div class="offcanvas-footer btn-jouer text-center p-3 rounded-3">
                <span class="fw-bolder color-nav mx-3">JOUER</span>
              </div>
            </a>
          </div>
        </li>
      </ul>
      
    </div>

    <!-- FIN RESPONSIVE -->

</div>

<!-- FIN NAVBAR -->

<!-- JAVASCRIPT -->

  <!-- LANTERNE -->

  <script>
        document.addEventListener("DOMContentLoaded", function() {
            const beaconImage = document.getElementById('beaconImage');
            let isHoldingBeacon = false;

            beaconImage.addEventListener('mousedown', function (event) {
                event.preventDefault();

                isHoldingBeacon = true;
                beaconImage.style.visibility = 'hidden';
                document.body.style.cursor = 'url(images/beacon_on.png) 20 17, auto';
            });

            document.addEventListener('click', function (event) {
                if (isHoldingBeacon && event.target !== beaconImage) {
                    beaconImage.style.visibility = 'visible';
                    document.body.style.cursor = 'auto';
                    isHoldingBeacon = false;
                }
            });
        });
    </script>

  <!-- FIN LANTERNE -->