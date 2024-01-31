<div class="container h-100">
    <p class='text-center text-capitalize fs-3 m-4'>Recuperar Contraseña</p>
    <div class="row h-100 justify-content-center align-items-center flex-column">
        <form class="col-md-4" id="formVerificarCorreo" method="post">
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@ejemplo.com">
            </div>
            <div class="mb-3">
                <label for="pregunta1" class="form-label">Nombre de tu película favorita</label>
                <input type="text" class="form-control" id="pregunta1" name="pregunta1">
            </div>
            <div class="mb-3">
                <label for="pregunta2" class="form-label">Nombre de tu personaje ficticio favorito</label>
                <input type="text" class="form-control" id="pregunta2" name="pregunta2">
            </div>
            <button type="submit" class="btn btn-primary" name="verificar_coreeo" id="btnVerificarCorreo">Verificar</button>
        </form>
    </div>
</div>