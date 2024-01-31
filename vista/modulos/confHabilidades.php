<?php
$habilidades = new DatosC();
$datos = $habilidades->mostrarHabilidadesC();
$filas = $datos->num_rows;
$habilidades->borraHabilidadC();
?>

<div class="container">
    <div>
        <h4 class="text-center text-primary">Configuración de habilidades</h4>
    </div>
    <div class="alert alert-light" role="alert">
        <p class="text-start px-4">Registra más habilidades <a href="index.php?ruta=registrarHabilidad" class="btn btn-primary">Registrar</a></p>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Habilidad</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Porcentaje</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($g = 0; $g < $filas; $g++) :
                    $fila = $datos->fetch_array(MYSQLI_ASSOC);
                    $habilidad_id = htmlspecialchars($fila['habilidad_id']);
                    $habilidad  = htmlspecialchars($fila['habilidad_nombre']);
                    $descripcion  = htmlspecialchars($fila['habilidad_descripcion']);
                    $porcentaje  = htmlspecialchars($fila['habilidad_porcentaje']);
                    $img  = htmlspecialchars($fila['habilidad_img']);

                    $cont = 1;
                    $cont += $g;

                ?>
                    <tr>
                        <th><?= $cont ?></th>
                        <td><?= $habilidad ?></td>
                        <td>
                            <p class="texto_con_puntos">
                                <?= $descripcion ?>
                            </p>
                        </td>
                        <td>
                            <img src="<?= $img ?>" alt="img" width="30" height="30" class="rounded">
                        </td>
                        <td><?= $porcentaje ?> %</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="index.php?ruta=actualizarHabilidad&id=<?= $habilidad_id ?>" class="btn btn-warning mx-2"><i class="bi bi-pencil-square"></i></a>
                                <a href="index.php?ruta=confHabilidades&id=<?= $habilidad_id ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <style>
        .texto_con_puntos {
            width: 70px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</div>