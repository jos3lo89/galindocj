<div class="d-flex justify-content-center align-items-center flex-column mx-3 mx-md-auto">
    <p class='text-center text-capitalize fs-3 my-2'>Registrar usuario Revisor</p>

    <form class="col-md-8 col-lg-6 p-4 border rounded-3 bg-body-tertiary mb-4" method="post" enctype="multipart/form-data" id="registroFormRevisor">
        <div class="row g-2">
            <div class="col-md-6">
                <label for="usuarioRevisor" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="usuarioRevisor" name="usuarioRevisor">
            </div>

            <div class="col-md-6">
                <label for="nombreRevisor" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreRevisor" name="nombreRevisor">
            </div>

            <div class="col-md-6">
                <label for="apellidoRevisor" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellidoRevisor" name="apellidoRevisor">
            </div>

            <div class="col-md-6">
                <label for="correoRevisor" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correoRevisor" name="correoRevisor" placeholder="ejemplo@ejemplo.com">
            </div>

            <div class="col-md-6">
                <label for="correo2Revisor" class="form-label">Repita el Correo Electrónico</label>
                <input type="email" class="form-control" id="correo2Revisor" name="correo2Revisor" placeholder="ejemplo@ejemplo.com">
            </div>

            <div class="col-md-6">
                <label for="claveRevisor" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="claveRevisor" name="claveRevisor" placeholder="********">
            </div>

            <div class="col-md-6">
                <label for="clave2Revisor" class="form-label">Repita la Contraseña</label>
                <input type="password" class="form-control" id="clave2Revisor" name="clave2Revisor" placeholder="********">
            </div>

            <div class="col-md-6">
                <label for="fotoRevisor" class="form-label">Foto</label>
                <input class="form-control" type="file" id="fotoRevisor" name="fotoRevisor" required>
            </div>

            <div class="col-md-6">
                <label for="pregunta1Revisor" class="form-label">Nombre de tu película favorita</label>
                <input type="text" class="form-control" id="pregunta1Revisor" name="pregunta1Revisor">
            </div>

            <div class="col-md-6">
                <label for="pregunta2Revisor" class="form-label">Nombre de tu personaje ficticio favorito</label>
                <input type="text" class="form-control" id="pregunta2Revisor" name="pregunta2Revisor">
            </div>

        </div>

        <button type="submit" class="btn btn-primary my-2" name="registrar_usuario_revisor" id="btnRegistrarUsuarioRevisor">Registrar</button>
    </form>
</div>