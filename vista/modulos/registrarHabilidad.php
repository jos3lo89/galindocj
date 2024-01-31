<div class="container pb-4">
    <p class='text-center fs-3 m-4'>Registrar Habilidades</p>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <form class="col-sm-8 col-md-6 col-lg-8 p-4 border rounded-3 bg-body-tertiary mx-2" id="formRegistraHabilidad" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="habilidadTxt" class="form-label">Habilidad</label>
                <input type="text" class="form-control" id="habilidadTxt" name="habilidadTxt">
            </div>
            <div class="mb-3">
                <label for="descripcionTxt" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcionTxt" id="descripcionTxt" cols="30" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="porcentajeInt" class="form-label">Porcentaje</label>
                <input type="number" class="form-control" id="porcentajeInt" name="porcentajeInt">
            </div>
            <div class="mb-3">
                <label for="imgHabilidad" class="form-label">Imagen de habilidad</label>
                <input type="file" class="form-control" id="imgHabilidad" name="imgHabilidad" required>
            </div>
            <button type="submit" class="btn btn-primary" name="registrar_habilidad" id="btnRegistrarhabilidad">Registrar</button>
        </form>
    </div>
</div>