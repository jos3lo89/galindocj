<div class="d-flex justify-content-center align-items-center flex-column mx-3 mx-md-auto">
    <p class='text-center text-capitalize fs-3 my-2'>Actualizar Perfil</p>

    <form class="col-md-8 col-lg-6 p-4 border rounded-3 bg-body-tertiary" method="post" enctype="multipart/form-data" id="formActualizarUsuario">
        <div class="row g-2">
            <div class="col-md-6">
                <label for="usuarioA" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="usuarioA" name="usuarioA" readonly>
            </div>

            <div class="col-md-6">
                <label for="nombreA" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreA" name="nombreA">
            </div>

            <div class="col-md-6">
                <label for="apellidoA" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellidoA" name="apellidoA">
            </div>

            <div class="col-md-6">
                <label for="correoA" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correoA" name="correoA" placeholder="ejemplo@ejemplo.com">
            </div>

            <div class="col-md-6">
                <label for="correoA2" class="form-label">Repita el Correo Electrónico</label>
                <input type="email" class="form-control" id="correoA2" name="correoA2" placeholder="ejemplo@ejemplo.com">
            </div>

            <div class="col-md-6">
                <label for="fotoA" class="form-label">Foto</label>
                <input class="form-control" type="file" id="fotoA" name="fotoA" required>
            </div>

        </div>

        <button type="submit" class="btn btn-primary mt-4" name="actualizar_usuarioA" id="btnActualizarUsuarioA">Actualizar</button>
    </form>
    <div class="py-2">
        <p>
            ¿Quieres cambiar la contraseña?
            <a href="index.php?ruta=recuperarClave" class="text-decoration-none">Cambiar contraseña</a>
        </p>
    </div>
</div>