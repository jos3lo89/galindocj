<?php
$habilidad2 = new DatosC();
$imprimir = $habilidad2->mostrarHabilidadesC();
$filas = $imprimir->num_rows;
?>

<div>
    <div class="text-center text-primary">
        <h3>Mis Habilidades</h3>
    </div>
    <?php if ($filas > 0) { ?>
        <div class="contenedor">
            <?php
            for ($k = 0; $k < $filas; $k++) :
                $fila = $imprimir->fetch_array(MYSQLI_ASSOC);
                $img = htmlspecialchars($fila['habilidad_img']);
                $habilidad = htmlspecialchars($fila['habilidad_nombre']);
                $descripcion = htmlspecialchars($fila['habilidad_descripcion']);
                $pocentaje = htmlspecialchars($fila['habilidad_porcentaje']);
            ?>
                <div class="rounded-3 p-2">
                    <div class="card shadow-sm">
                        <div class="img-caja">
                            <img src="<?= $img ?>" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="text-primary"><?= $habilidad ?></h5>
                            <p class="card-text">
                                <?= $descripcion ?>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-body-secondary"><?= $pocentaje ?> %</small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

    <?php } else { ?>
        <div class="d-flex justify-content-center pt-4">
            <div class="alert alert-warning" role="alert">
                No hay habilidades para mostrar
            </div>
        </div>
    <?php } ?>
</div>