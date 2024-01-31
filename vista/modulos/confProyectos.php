<?php
$proyectos = new DatosC();
$dato = $proyectos->mostrarProyectosC();
$filas = $dato->num_rows;
$proyectos->borrarProyectoC();
?>

<div class="container">
    <div>
        <h4 class="text-center text-primary">Configuración de Proyectos</h4>
    </div>
    <div class="alert alert-light" role="alert">
        <p class="text-start px-4">Registra más Proyectos <a href="index.php?ruta=registrarProyecto" class="btn btn-primary">Registrar</a></p>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">GitHub</th>
                    <th scope="col">Url</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($n = 0; $n < $filas; $n++) :
                    $fila = $dato->fetch_array(MYSQLI_ASSOC);

                    $proyecto_id = htmlspecialchars($fila['proyecto_id']);
                    $nombre = htmlspecialchars($fila['proyectos_nombre']);
                    $descripcion = htmlspecialchars($fila['proyectos_descripcion']);
                    $github = htmlspecialchars($fila['proyecto_github']);
                    $url = htmlspecialchars($fila['proyecto_url']);
                    $imagen = htmlspecialchars($fila['proyecto_img']);

                    $cont = 1;
                    $cont += $n;
                ?>
                    <tr>
                        <td><?= $cont ?></td>
                        <td><?= $nombre ?></td>
                        <td>
                            <p class="texto_con_puntos">
                                <?= $descripcion ?>
                            </p>
                        </td>
                        <td>
                            <img src="<?= $imagen ?>" alt="img" width="30" height="30" class="rounded">
                        </td>
                        <td>
                            <a href="<?= $github ?>" target="_blank" class="btn btn-info"><i class="bi bi-github"></i> <span class="d-none d-md-inline">github</span></a>
                        </td>
                        <td>
                            <a href="<?= $url ?>" target="_blank" class="btn btn-info"><i class="bi bi-box-arrow-up-right"></i> <span class="d-none d-md-inline">Web</span></a>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="index.php?ruta=actualizarProyecto&id=<?= $proyecto_id ?>" class="btn btn-warning mx-2"><i class="bi bi-pencil-square"></i></a>
                                <a href="index.php?ruta=confProyectos&id=<?= $proyecto_id ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>
<style>
    .texto_con_puntos {
        width: 70px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>