<?php
// Imprimir btn ingresar o cerra sesión
$usuarioC = new UsuarioC();
$imprime = $usuarioC->btnUsuario();

// url usuario  ingrear cerrar sesión
$usuarioC->urlingresarCerrar();

// proteccion de ruta registrar
$rutasCPro = new RutasC();
$rutasCPro->protegeRutaRegistrar();

// proteccion ruta cambiar clave
$rutasCPro->protegeRutaCambiarClave();

// proteccion rutas conf
$rutasCPro->protegeRutaConfC();
$rutasCPro->protegeRutaConfPerfil();

?>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <?= $imprime['barra'] ?>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?= isset($_SESSION['usuario_foto']) ? htmlspecialchars($_SESSION['usuario_foto']) : "vista/fotoPerfil/perfil-fija.png" ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li>
                        <a class="dropdown-item text-primary" href="<?= isset($_SESSION['usuario_nombre']) ? 'index.php?ruta=miPerfil' : 'index.php?ruta=ingresar'  ?>"><?= isset($_SESSION['usuario_nombre']) ? htmlspecialchars($_SESSION['usuario_nombre']) : "Visitante" ?></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li><a class="dropdown-item" href="<?= isset($_SESSION['usuario_nombre']) ? 'index.php?ruta=confPerfil' : 'index.php?ruta=ingresar'  ?>">Configuración</a></li>
                    <li><a class="dropdown-item" href="<?= isset($_SESSION['usuario_nombre']) ? 'index.php?ruta=miPerfil' : 'index.php?ruta=ingresar'  ?>">Mi Perfil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <?= $imprime['btn'] ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>