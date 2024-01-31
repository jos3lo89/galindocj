<div class="container h-100">
    <p class='text-center text-capitalize fs-3 m-4'>Iniciar sesión</p>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <form class="col-md-4 p-4 border rounded-3 bg-body-tertiary mx-4" id="formIngresar" method="post">
            <div class="mb-3">
                <label for="IngresarUsuario" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="IngresarUsuario" name="IngresarUsuario" placeholder="usuario">
            </div>
            <div class="mb-3">
                <label for="ingresarClave" class="form-label">Contrasña</label>
                <input type="password" class="form-control" id="ingresarClave" name="ingresarClave" placeholder="***********">
            </div>
            <button type="submit" class="btn btn-primary" name="ingresar_usuario" id="btnIngresar">Ingresar</button>
        </form>
        <div class="col-md-4 pt-4">
            <p>
                ¿olvidaste tu contraseña
                <a href="index.php?ruta=recuperarClave" class="icon-link link-primary ">
                    recuperar.
                    <svg class="bi" aria-hidden="true">
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </a>
            </p>
        </div>
        <div class="col-md-4" id="mensaje">
            <a href="index.php?ruta=registrarRevisor" class="btn btn-info">Registrate</a>
        </div>
    </div>
</div>