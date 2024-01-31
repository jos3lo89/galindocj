<?php
$habilidadActua = new DatosC();
$datos = $habilidadActua->mostrarHabilidadesActuaC();
$habilidadActua->actualizarHabilidadC();
?>
<div class="container pb-4">
    <p class='text-center fs-3 m-4'>Actualizar Habilidad</p>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <form class="col-sm-8 col-md-6 col-lg-8 p-4 border rounded-3 bg-body-tertiary mx-2" id="formActualizarHabilidad" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="habilidadTxtA" class="form-label">Habilidad</label>
                <input type="text" class="form-control" id="habilidadTxtA" name="habilidadTxtA" value="<?= isset($datos['habilidad']) ? $datos['habilidad'] : "" ?>">
            </div>
            <div class="mb-3">
                <label for="descripcionTxtA" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcionTxtA" id="descripcionTxtA" cols="30" rows="3"><?= isset($datos['descripcion']) ? $datos['descripcion'] : "" ?></textarea>
            </div>
            <div class="mb-3">
                <label for="porcentajeIntA" class="form-label">Porcentaje</label>
                <input type="number" class="form-control" id="porcentajeIntA" name="porcentajeIntA" value="<?= isset($datos['porcentaje']) ? $datos['porcentaje'] : "" ?>">
            </div>
            <div class="mb-3">
                <label for="imgHabilidadA" class="form-label">Imagen de habilidad</label>
                <input type="file" class="form-control" id="imgHabilidadA" name="imgHabilidadA" required>
            </div>
            <input type="hidden" name="idHabilidad" value="<?= $datos['id_habilidad'] ?>">
            <button type="submit" class="btn btn-primary" name="actualizar_habilidad" id="btnActualizarHabilidad">Actualizar</button>
        </form>
    </div>
</div>