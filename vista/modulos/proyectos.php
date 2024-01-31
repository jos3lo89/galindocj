<?php
$proeycto2 = new DatosC();
$datos = $proeycto2->mostrarProyectosC();
$filas = $datos->num_rows;
?>
<div>
    <div class="text-center text-primary">
        <h3>Mis Proyectos</h3>
    </div>
    <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 p-4"> -->
    <?php
    if ($filas > 0) {
    ?>
        <div class="contenedor">
            <?php
            for ($t = 0; $t < $filas; $t++) :
                $fila = $datos->fetch_array(MYSQLI_ASSOC);
                $nombre = htmlspecialchars($fila['proyectos_nombre']);
                $descripcion = htmlspecialchars($fila['proyectos_descripcion']);
                $github = htmlspecialchars($fila['proyecto_github']);
                $url = htmlspecialchars($fila['proyecto_url']);
                $img = htmlspecialchars($fila['proyecto_img']);
            ?>
                <div class="col rounded-3 p-2">
                    <div class="card shadow-sm">
                        <div class="img-caja">
                            <img src="<?= $img ?>" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="text-primary"><?= $nombre ?></h5>
                            <p class="card-text"><?= $descripcion ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="<?= $github ?>" target="_blank" class="btn btn-sm btn-outline-secondary"><i class="bi bi-github"></i> GitHub</a>
                                    <a href="<?= $url ?>" target="_blank" class="btn btn-sm btn-outline-secondary"><i class="bi bi-link"></i> Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    <?php } else {
    ?>
        <div class="d-flex justify-content-center pt-4">
            <div class="alert alert-warning" role="alert">
                No hay proyectos para mostrar
            </div>
        </div>
    <?php } ?>
</div>