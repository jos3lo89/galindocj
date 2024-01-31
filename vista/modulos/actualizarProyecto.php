<?php
$proyectoActua = new DatosC();
$datos = $proyectoActua->mostrarProyectosActuaC();
$proyectoActua->actualizarProyectoC();
?>
<div class="container pb-4">
    <p class='text-center fs-3 m-4'>Actualizar Proyecto</p>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <form class="col-sm-8 col-md-6 col-lg-8 p-4 border rounded-3 bg-body-tertiary mx-2" id="formActualizarProyecto" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="ProyectoTxtA" class="form-label">Proyecto</label>
                <input type="text" class="form-control" id="ProyectoTxtA" name="ProyectoTxtA" value="<?= isset($datos['nombre']) ? $datos['nombre'] : "" ?>">
            </div>

            <div class="mb-3">
                <label for="descripcionTxtA" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcionTxtA" id="descripcionTxtA" cols="30" rows="3"><?= isset($datos['descreipcion']) ? $datos['descreipcion'] : "" ?></textarea>
            </div>

            <div class="mb-3">
                <label for="githubLinkA" class="form-label">GitHub</label>
                <input type="text" class="form-control" id="githubLinkA" name="githubLinkA" value="<?= isset($datos['gtihub']) ? $datos['gtihub'] : "" ?>">
            </div>

            <div class="mb-3">
                <label for="urlLinkA" class="form-label">Url Web</label>
                <input type="text" class="form-control" id="urlLinkA" name="urlLinkA" value="<?= isset($datos['url']) ? $datos['url'] : "" ?>">
            </div>

            <div class="mb-3">
                <label for="imgProyectoA" class="form-label">Imagen de Proyecto</label>
                <input type="file" class="form-control" id="imgProyectoA" name="imgProyectoA" required>
            </div>

            <input type="hidden" name="idProyecto" value="<?= $datos['id_proyecto'] ?>">
            <button type="submit" class="btn btn-primary" name="actualizar_proyecto" id="btnActualizarProyecto">Actualizar Proyecto</button>
        </form>
    </div>
</div>