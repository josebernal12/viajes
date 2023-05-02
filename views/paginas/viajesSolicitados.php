<main class="container-xl py-5">
    <h2 class="text-center mb-5 display-3 fw-bold">Viajes Mas Solicitados</h2>
    <div class="row">
        <?php $cantidad = 1  ?>

        <?php foreach ($viajes as $viaje) : ?>
            <?php if ($cantidad < 4) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="build/img/<?php echo $viaje->nombre ?>.jpg" alt="imagen viaje" class="card-img-top imagen">

                        <div class="card-body ">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark fs-4 boletos">Boletos Disponibles: <span class="text-primary fw-bold"><?php echo $viaje->boletos  ?></span></p>
                                <p class="text-dark fs-4 hora"> <span class="text-primary fw-bold"><?php echo $viaje->hora  ?></span> Hora de salida <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-airplane-fill" viewBox="0 0 16 16">
                                        <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z" />
                                    </svg></p>
                            </div>
                            <div class="d-flex flex-column ">
                                <h3 class="card-title text-center text-uppercase fs-2"><?php echo $viaje->nombre  ?></h3>
                                <p class="text-dark fs-4 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facilis
                                    provident accusamus laudantium, in harum cumque quas in harum cumque quas in harum cumque
                                    quas </p>
                                <a href="/visitar?id=<?php echo $viaje->id  ?>" class="btn btn-primary text-uppercase fs-3">Visitar <i class="bi bi-alarm-fill"></i></a>
                                <a href="#" id="guardar" class="btn btn-dark text-uppercase fs-3 mt-3">Guardar Favoritos <i class="bi bi-star"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <?php $cantidad++ ?>
            <?php endif ?>
        <?php endforeach;  ?>

          </div>
</main>