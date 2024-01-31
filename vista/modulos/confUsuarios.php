<?php
$mostrarUsuarios = new UsuarioC();
$datosUsuario = $mostrarUsuarios->mostrarUsuariosC();
$filas = $datosUsuario->num_rows;
$mostrarUsuarios->elminarUsuariosC();
?>

<div class="container">
    <div class="alert alert-light" role="alert">
        <p>Registrar Usuarios <a href="index.php?ruta=registrar" class="btn btn-primary">Registrar</a></p>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Fecha de registro</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $filas; $i++) :
                    $fila = $datosUsuario->fetch_array(MYSQLI_ASSOC);
                    $id = htmlspecialchars($fila['usuario_id']);
                    $usuario = htmlspecialchars($fila['usuario_usuario']);
                    $nombre = htmlspecialchars($fila['usuario_nombre']);
                    $apellido = htmlspecialchars($fila['usuario_apellido']);
                    $correo = htmlspecialchars($fila['usuario_correo']);
                    $foto = htmlspecialchars($fila['usuario_foto']);
                    $fechaRegistro = htmlspecialchars($fila['usuario_fecha_registro']);
                    $rol = htmlspecialchars($fila['usuario_rol']);

                    $cont = 1;
                    $cont += $i;
                ?>
                    <tr>
                        <td><?= $cont ?></td>
                        <td><?= $usuario ?></td>
                        <td><?= $nombre ?></td>
                        <td><?= $apellido ?></td>
                        <td><?= $correo ?></td>
                        <td>
                            <img src="<?= $foto ?>" alt="" width="40">
                        </td>
                        <td><?= $fechaFormateada = date('Y-m-d', strtotime($fechaRegistro)) ?></td>
                        <td><?= $rol ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <?php if ($id != 1) { ?>
                                    <a href="index.php?ruta=confUsuarios&id=<?= $id ?>" class="btn btn-danger" onclick="confirmarEliminacion(event)"><i class="bi bi-trash"></i></a>
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                <?php endfor;  ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    function confirmarEliminacion(event) {
        var confirmacion = confirm('el usuario se eliminará. ¿Quieres continuar?');

        if (confirmacion) {
            window.location.href = event.target.href;
        } else {
            event.preventDefault();
        }
    }
</script>