<section class="container-xl mt-5 py-5">
    <h2 class="text-center display-2 fw-bold">Horario</h2>

    <form id="formulario" action="" class="text-center   ">
        <div class="row">
            <div class="col-md-6">
                <label for="dia" class="form-label text-center fs-4">Dia:</label>
                <input type="date" class="form-control form-control-lg px-5 fs-3" id="dia" name="dia">
            </div>

            <div class="col-md-6">

                <label for="hora" class="form-label text-center fs-4">Hora:</label>
                <input type="time" class="form-control form-control-lg px-5 fs-3" id="hora" name="hora">
            </div>
        </div>

        <div class="row mt-5 ">
            <div class="col-md-4">
                <label for="hora" class="form-label text-center fs-4">Precio:</label>
                <input type="number" class="form-control  px-2 fs-3 text-center" id="precio" name="precio">
            </div>

            <div class="col-md-4">
                <label for="hora" class="form-label text-center fs-4">Precio Min:</label>
                <input type="number" class="form-control  px-2 fs-3 text-center" id="precioMin" name="precioMin">
            </div>

            <div class="col-md-4">

                <label for="hora" class="form-label text-center fs-4">Precio Max:</label>
                <input type="number" class="form-control  px-2 fs-3 text-center" id="precioMax" name="precioMax">
            </div>
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center mt-4">
            <input type="submit" class="btn btn-primary btn-lg text-uppercase fw-bold px-5 py-3">
        </div>

    </form>

    <div class="horario mt-5 py-5 ">
        <div class="" id="contenedorHorario">
            <?php foreach ($viajes as $viaje) : ?>
                <div class="row align-items-center border-bottom mb-5 mt-5  ">
                    <div class="col-md-4">
                        <img src="build/img/<?php echo $viaje->nombre ?>.jpg" alt="imagen viaje" class="img-fluid imagen">
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center fs-1 text-primary text-uppercase"><?php echo $viaje->nombre ?></h3>
                        <!-- <p class="text-dark fs-3">Lorem ipsum dolor sit amet consectetur adipisicing elit! adipisicing elit! adipisicing elit!</p> -->
                        <p class="text-dark text-center">Hora de Salida: <span class="text-primary fw-bold"><?php echo $viaje->hora ?></span></p>
                        <p class="text-dark text-center">Fecha de Salida: <span class="text-primary fw-bold"><?php echo $viaje->fecha ?></span></p>
                        <p class="text-dark text-center">Boletos Disponibles: <span class="text-primary fw-bold"><?php echo $viaje->boletos ?></span></p>
                        <p class="text-dark text-center">Precio: <span class="text-primary fw-bold"><?php echo $viaje->precio ?></span></p>

                    </div>

                    <div class="col-md-4">
                        <a href="/visitar?id=<?php echo $viaje->id   ?>" class="btn btn-primary btn-lg text-uppercase fs-3">Visitar <i class="bi bi-alarm-fill"></i></a>

                    </div>
                </div>
            <?php endforeach  ?>


            <!-- <div class="border-bottom mt-4"></div> -->

        </div>
    </div>
</section>