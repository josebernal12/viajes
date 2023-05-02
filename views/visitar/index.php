<header class="py-5 <?php echo $viaje->nombre;  ?>">
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

<main class="container-xl my-5 py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="build/img/<?php echo $viaje->nombre ?>.jpg" class="imagenVisita" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="build/img/<?php echo $viaje->nombre ?>1.jpg" class="imagenVisita" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="build/img/<?php echo $viaje->nombre ?>2.jpg" class="imagenVisita" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="text-uppercase text-center display-2 fw-bold text-primary"><?php echo $viaje->nombre   ?></h2>

            <div class="d-flex justify-content-between">
                <p class="text-dark">Boletos Disponibles <span class="text-primary fw-bold"><?php echo $viaje->boletos  ?></span></p>
                <p class="text-dark">Hora de Salida <span class="text-primary fw-bold"><?php echo $viaje->hora  ?></span></p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="text-dark">Fecha de Salida <span class="text-primary fw-bold"><?php echo $viaje->fecha  ?></span></p>
                <p class="text-dark">Precio por Boleto <span class="text-primary fw-bold">$<?php echo $viaje->precio  ?></span></p>
            </div>
            <form action="">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <label for="boletos" class="form-label fs-4">Boletos</label>
                    <input type="number" class="form-control py-3  fs-3 text-center ">

                </div>
                <div class="d-flex justify-content-between mt-5">
                    <input type="submit" class="btn btn-outline-dark btn-lg px-5 text-uppercase fw-bold text-center" value="Comprar">
                    <a href="/" class="btn btn-outline-primary btn-lg px-5 text-uppercase fw-bold text-center">Regresar</a>

                </div>

            </form>
        </div>
    </div>
</main>

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

'
?>