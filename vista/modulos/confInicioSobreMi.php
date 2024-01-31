<?php
$insertarDatos = new DatosC();
$insertarDatos->insertarInicioSobreMiC();
$datos3 = $insertarDatos->mostrarInicioSobreMiC();
?>

<div class="container h-100">
    <p class='text-center text-primary fs-3 m-4 '>Actualizar Inicio y Sobre Mi</p>
    <div class="row h-100 justify-content-center align-items-center flex-column m-4">
        <form class="col-12 col-sm-12 col-md-12 col-lg-11 p-4 border rounded-3 bg-body-tertiary" id="formActualizarInicioSobreMi" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="fotoInicio" class="form-label">Foto - inicio</label>
                <input class="form-control" type="file" id="fotoInicio" name="fotoInicio" required>
            </div>

            <div class="mb-3">
                <label for="textoinicio" class="form-label">Presentación - inicio</label>
                <textarea class="form-control" id="textoinicio" rows="5" name="textoinicio"><?= isset($datos3['presentacion']) ? htmlspecialchars($datos3['presentacion']) : "" ?></textarea>
                <div id="emailHelp" class="form-text border p-2 rounded">
                    <span class="text-warning">Ejemplo:</span>
                    Soy <span class="text-info">[Tu Nombre]</span>, un entusiasta estudiante de
                    <span class="text-info">[Tu carrera]</span> con una verdadera pasión por el <span class="text-info">[Tu pasión]</span>. Con <span class="text-info">[Tu Edad]</span> años de edad, mi camino académico en
                    la Universidad <span class="text-info">[Tu Universidad]</span> me ha proporcionado una sólida base para
                    explorar y contribuir al emocionante mundo de la tecnología.
                </div>
            </div>

            <div class="mb-3">
                <label for="textoQuienSoy" class="form-label">Quien Soy - Sobre mi</label>
                <textarea class="form-control" id="textoQuienSoy" rows="5" name="textoQuienSoy"><?= isset($datos3['quienSoy']) ? htmlspecialchars($datos3['quienSoy']) : "" ?></textarea>
                <div id="emailHelp" class="form-text border p-2 rounded">
                    <span class="text-warning">Ejemplo:</span>
                    <span class="text-info">[Tu Nombre]</span>, un estudiante de ingeniería de sistemas de <span class="text-info">[Tu Edad]</span> años de edad apasionado por <span class="text-info">[Tu Pasión]</span>. Actualmente, estoy cursando mi carrera en la Universidad <span class="text-info">[Tu Universidad]</span>.
                </div>
            </div>

            <div class="mb-3">
                <label for="textoObjetivo" class="form-label">Mi Objetivo - Sobre mi</label>
                <textarea class="form-control" id="textoObjetivo" rows="5" name="textoObjetivo"><?= isset($datos3['miObjetivo']) ? htmlspecialchars($datos3['miObjetivo']) : "" ?></textarea>
                <div id="emailHelp" class="form-text border p-2 rounded">
                    <span class="text-warning">Ejemplo:</span>
                    Mi objetivo principal es <span class="text-info">[Tu Objetivo]</span> en el ciclo académico <span class="text-info">[El Ciclo]</span> con éxito. Además, tengo la meta de <span class="text-info">[Tu Meta]</span>. Disfruto especialmente trabajando en <span class="text-info">[Que Disfrutas]</span>.
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="actualizarInicioSobreMi" id="btnActualizarInicioSobreMi">Actualizar</button>
        </form>
    </div>
</div>