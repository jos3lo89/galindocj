<?php
$mostrarDatosInicio = new DatosC();
$datos = $mostrarDatosInicio->mostrarInicioSobreMiC();
?>

<div class="d-flex justify-content-center align-items-center flex-column flex-md-row  mx-4 my-4 border rounded-3 bg-body-tertiary">
    <div class="col-auto">
        <img src="<?= isset($datos['datoFoto']) ?  htmlspecialchars($datos['datoFoto']) : "vista/img/fotoyo.webp" ?>" alt="fotografica personal" class="fotoyo img-thumbnail rounded" width="200">
    </div>
    <div class="col p-4 ">
        <p class="fs-5">
            <span class="fs-3 text-primary">¡Hola!</span>
            <?= htmlspecialchars($datos['presentacion']) ?>
        </p>
    </div>
</div>