<div class="container pb-4">
    <p class='text-center fs-3 m-4'>Registrar Proyectos</p>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <form class="col-sm-8 col-md-6 col-lg-8 p-4 border rounded-3 bg-body-tertiary mx-2" id="formRegistraProyecto" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="proyectoTxt" class="form-label">Proyecto</label>
                <input type="text" class="form-control" id="proyectoTxt" name="proyectoTxt">
            </div>

            <div class="mb-3">
                <label for="descripcionTxt" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcionTxt" id="descripcionTxt" cols="30" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="githubTxt" class="form-label">Git Hub</label>
                <input type="text" class="form-control" id="githubTxt" name="githubTxt">
            </div>

            <div class="mb-3">
                <label for="urlTxt" class="form-label">Url</label>
                <input type="text" class="form-control" id="urlTxt" name="urlTxt">
            </div>

            <div class="mb-3">
                <label for="imgProyecto" class="form-label">Imagen de Proyecto</label>
                <input type="file" class="form-control" id="imgProyecto" name="imgProyecto">
            </div>

            <button type="submit" class="btn btn-primary" name="registrar_proyecto" id="btnRegistrarProyecto">Registrar Proyecto</button>
        </form>
    </div>
</div>