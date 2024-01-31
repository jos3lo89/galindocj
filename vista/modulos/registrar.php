<div class="d-flex justify-content-center align-items-center flex-column mx-3 mx-md-auto">
    <p class='text-center text-capitalize fs-3 my-2'>Registrar usuario</p>

    <form class="col-md-8 col-lg-6 p-4 border rounded-3 bg-body-tertiary mb-4" method="post" enctype="multipart/form-data" id="registroForm">
        <div class="row g-2">
            <div class="col-md-6">
                <label for="usuario" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>

            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <div class="col-md-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>

            <div class="col-md-6">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@ejemplo.com">
            </div>

            <div class="col-md-6">
                <label for="correo2" class="form-label">Repita el Correo Electrónico</label>
                <input type="email" class="form-control" id="correo2" name="correo2" placeholder="ejemplo@ejemplo.com">
            </div>

            <div class="col-md-6">
                <label for="clave" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="clave" name="clave" placeholder="********">
            </div>

            <div class="col-md-6">
                <label for="clave2" class="form-label">Repita la Contraseña</label>
                <input type="password" class="form-control" id="clave2" name="clave2" placeholder="********">
            </div>

            <div class="col-md-6">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto" required>
            </div>

            <div class="col-md-6">
                <label for="rol" class="form-label">Rol del Usuario</label>
                <select class="form-select" aria-label="Default select example" name="rol" id="rol" required>
                    <option selected disabled>Selecciona un rol</option>
                    <option value="administrador">Administrador</option>
                    <option value="revisor">Revisor</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="pregunta1" class="form-label">Nombre de tu película favorita</label>
                <input type="text" class="form-control" id="pregunta1" name="pregunta1">
            </div>

            <div class="col-md-6">
                <label for="pregunta2" class="form-label">Nombre de tu personaje ficticio favorito</label>
                <input type="text" class="form-control" id="pregunta2" name="pregunta2">
            </div>

        </div>

        <button type="submit" class="btn btn-primary my-2" name="registrar_usuario" id="btnRegistrarUsuario">Registrar</button>
    </form>
</div>