<?php
$mostrarDatosInicio2 = new DatosC();
$datos2 = $mostrarDatosInicio2->mostrarInicioSobreMiC();
?>

<div class="m-4 d-flex justify-content-center align-items-center flex-column ">
    <div class="col-sm-10 col-md-10 border rounded-3 bg-body-tertiary my-2 p-4">
        <h3 class="text-primary">¡Hola! Soy </h3>
        <p class="fs-5">
            <?= isset($datos2['quienSoy']) ? htmlspecialchars($datos2['quienSoy']) : "Ingresa a la base de datos quien eres!!" ?>
        </p>
    </div>
    <div class="col-sm-10 col-md-10 border rounded-3 bg-body-tertiary my-2 p-4">
        <h3 class="text-primary">Mi objetivo </h3>
        <p class="fs-5">
            <?= isset($datos2['miObjetivo']) ? htmlspecialchars($datos2['miObjetivo']) : "Ingresa a la base de datos tu objetivo!!" ?>
        </p>
    </div>
</div>