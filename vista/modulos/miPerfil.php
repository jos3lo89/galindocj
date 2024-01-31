<div class="text-center">
    <h4 class="text-primary fs-3">Mis Datos</h4>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 p-4">
    <div>
        <h5 class="text-info">Usuario</h5>
        <p><?= isset($_SESSION['usuario_usuario']) ?  htmlspecialchars($_SESSION['usuario_usuario']) : "" ?></p>
    </div>
    <div>
        <h5 class="text-info">Nombre</h5>
        <p><?= isset($_SESSION['usuario_nombre']) ?  htmlspecialchars($_SESSION['usuario_nombre']) : "" ?></p>
    </div>
    <div>
        <h5 class="text-info">Apellido</h5>
        <p><?= isset($_SESSION['usuario_apellido']) ?  htmlspecialchars($_SESSION['usuario_apellido']) : "" ?></p>
    </div>
    <div>
        <h5 class="text-info">Correo</h5>
        <p><?= isset($_SESSION['usuario_correo']) ?  htmlspecialchars($_SESSION['usuario_correo']) : "" ?></p>
    </div>
    <div class="">
        <h5 class="text-info">Foto</h5>
        <img src="<?= isset($_SESSION['usuario_foto']) ?  htmlspecialchars($_SESSION['usuario_foto']) : "vista/fotoPerfil/perfil-fija.png" ?>" alt="foto usuario" width="100">
        <!-- <p></p> -->
    </div>
    <div>
        <h5 class="text-info">Mi Rol</h5>
        <p><?= isset($_SESSION['usuario_rol']) ?  htmlspecialchars($_SESSION['usuario_rol']) : "" ?></p>
    </div>
</div>

<div class="text-center mb-4">
    <a href="index.php?ruta=confPerfil" class="btn btn-warning"><i class="bi bi-gear-fill"></i> Editar Perfil</a>
</div>