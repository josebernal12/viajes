<header class="py-5 header">
    <div class="container-xl">

        <div class="d-flex justify-content-between align-items-center">


            <p class="display-2 text-warning" data-bs-toggle="offcanvas" data-bs-target="#menu"><i class="bi bi-list"></i></p>

            <div id="menu" class="offcanvas offcanvas-start bg-warning">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title text-white fs-1">Disfruta tu proximo Viaje</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <form action="" class="d-flex flex-column">
                        <div class="d-flex flex-column align-items-center">
                            <label class="form-label text-white fs-2" for="Ciudad">Paises Disponibles</label>
                            <select id="seleccionar-pais" class="form-select form-select-lg mb-3 text-center py-3 fs-4">
                                <option class="" disabled selected value="">-- Seleccione --</option>
                                <option value="canada">Canada</option>
                                <option value="japon">Japon</option>
                                <option value="mexico">Mexico</option>
                                <option value="holanda">Holanda</option>
                                <option value="francia">Francia</option>
                                <option value="inglaterra">Inglaterra</option>
                            </select>
                        </div>
                        <div id="paisBuscar"></div>

                    </form>
                </div>
            </div>
            <nav class="d-flex justify-content-md-end gap-4">
                <a class="text-decoration-none nav-link text-warning fw-bold fs-2" href="#">Inicio</a>
                <a class="text-decoration-none nav-link text-warning fw-bold fs-2" href="#">Viajes</a>
                <a class="text-decoration-none nav-link text-warning fw-bold fs-2" href="#">Favoritos</a>
                <a class="text-decoration-none nav-link text-warning fw-bold fs-2" href="#">Contacto</a>
            </nav>
        </div>



        <div class="row justify-content-md-end align-items-center">
            <div class="col-md-6 ">
                <h1 class="text-warning header__titulo display-1  text-center">Los Mejores viajes a <span id="viajes"></span> </h1>
            </div>
        </div>

    </div>
</header>

<?php require_once __DIR__ . '/viajesSolicitados.php';         ?>
<?php require_once __DIR__ . '/carousel.php';         ?>
<?php require_once __DIR__ . '/horario.php';         ?>



<footer class="bg-dark py-5 mt-5">
    <div class="container-xl">
        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center">
            <nav class="d-flex flex-column flex-md-row align-items-center  gap-4">
                <a class="text-decoration-none nav-link text-warning fw-bold fs-2" href="#">Inicio</a>
                <a class="text-decoration-none nav-link text-warning fw-bold fs-2" href="#">Viajes</a>
                <a class="text-decoration-none nav-link text-warning fw-bold fs-2" href="#">Favoritos</a>
                <a class="text-decoration-none nav-link text-warning fw-bold fs-2" href="#">Contacto</a>
            </nav>
            <p class="text-warning fw-bold mt-5">Todos los derechos reservados</p>
        </div>
    </div>
</footer>
<?php

$script = '
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="build/js/typed.js" type="module"></script>
<script src="build/js/buscarPais.js" type="module"></script>
<script src="build/js/horario.js" type="module"></script>
<script src="build/js/guardarFavorito.js" type="module"></script>

'
?>