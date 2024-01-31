<?php
class UsuarioC
{
    public $usuarioM;

    public function __construct()
    {
        $this->usuarioM = new UsuarioM();
    }

    public function btnUsuario()
    {
        if (isset($_SESSION['usuario_id']) && $_SESSION['usuario_rol'] == 'administrador') {
            $barra = '
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php?ruta=inicio" class="nav-link px-2 link-body-emphasis">Inicio</a></li>
                <li><a href="index.php?ruta=sobreMi" class="nav-link px-2 link-body-emphasis">Sobre Mi</a></li>
                <li><a href="index.php?ruta=habilidades" class="nav-link px-2 link-body-emphasis">Habilidades</a></li>
                <li><a href="index.php?ruta=proyectos" class="nav-link px-2 link-body-emphasis">Proyectos</a></li>
                <li><a href="index.php?ruta=contacto" class="nav-link px-2 link-body-emphasis">Contacto</a></li>
                <li><a href="index.php?ruta=registrar" class="nav-link px-2 link-body-emphasis text-warning">Registrar</a></li>
                <li>
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Configuraciones</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?ruta=confInicioSobreMi">Inicio y Sobre Mi</a></li>
                        <li><a class="dropdown-item" href="index.php?ruta=confHabilidades">Habilidades</a></li>
                        <li><a class="dropdown-item" href="index.php?ruta=confProyectos">Proyectos</a></li>
                        <li><a class="dropdown-item text-danger" href="index.php?ruta=confUsuarios">Usuarios</a></li>
                    </ul>
                </li>
            </ul>
            ';
            $btn = '
                <form method="post" id="formBarraNav" class="dropdown-item">
                    <input type="hidden" name="cerraSesion" id="cerraSesion">
                    <button type="submit" name="cerrar_sesion" class="btn btn-danger">Cerra Sesión</button>
                </form>
            ';
            $imprime = array(
                "barra" => $barra,
                "btn" => $btn
            );

            return $imprime;
        } else if (isset($_SESSION['usuario_id']) && $_SESSION['usuario_rol'] == 'revisor') {
            $barra = '
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php?ruta=inicio" class="nav-link px-2 link-body-emphasis">Inicio</a></li>
                <li><a href="index.php?ruta=sobreMi" class="nav-link px-2 link-body-emphasis">Sobre Mi</a></li>
                <li><a href="index.php?ruta=habilidades" class="nav-link px-2 link-body-emphasis">Habilidades</a></li>
                <li><a href="index.php?ruta=proyectos" class="nav-link px-2 link-body-emphasis">Proyectos</a></li>
                <li><a href="index.php?ruta=contacto" class="nav-link px-2 link-body-emphasis">Contacto</a></li>
                <li>
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Configuraciones</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?ruta=confInicioSobreMi">Inicio y Sobre Mi</a></li>
                        <li><a class="dropdown-item" href="index.php?ruta=confHabilidades">Habilidades</a></li>
                        <li><a class="dropdown-item" href="index.php?ruta=confProyectos">Proyectos</a></li>
                    </ul>
                </li>
            </ul>
            ';
            $btn = '
            <form method="post" id="formBarraNav" class="dropdown-item">
                <input type="hidden" name="cerraSesion" id="cerraSesion">
                <button type="submit" name="cerrar_sesion" class="btn btn-danger">Cerra Sesión</button>
            </form>
            ';

            $imprime = array(
                "barra" => $barra,
                "btn" => $btn
            );

            return $imprime;
        } else {
            $barra = '
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php?ruta=inicio" class="nav-link px-2 link-body-emphasis">Inicio</a></li>
                <li><a href="index.php?ruta=sobreMi" class="nav-link px-2 link-body-emphasis">Sobre Mi</a></li>
                <li><a href="index.php?ruta=habilidades" class="nav-link px-2 link-body-emphasis">Habilidades</a></li>
                <li><a href="index.php?ruta=proyectos" class="nav-link px-2 link-body-emphasis">Proyectos</a></li>
                <li><a href="index.php?ruta=contacto" class="nav-link px-2 link-body-emphasis">Contacto</a></li>
            </ul>
            ';
            $btn = '
            <form method="post" id="formBarraNav" class="dropdown-item">
                <input type="hidden" name="barraIngresar" id="barraIngresar" class="dropdown-item">
                <button type="submit" name="barra_ingresar" class="btn btn-info">Ingresar</button>
            </form>
            ';

            $imprime = array(
                "barra" => $barra,
                "btn" => $btn
            );

            return $imprime;
        }
    }


    public function urlingresarCerrar()
    {
        if (isset($_POST['cerrar_sesion'])) {
            $cerraSess = new SessionC();
            $cerraSess->cerrarSesionC();
            header("location: index.php?ruta=inicio");
        } else if (isset($_POST['barra_ingresar'])) {
            header("location: index.php?ruta=ingresar");
        }
    }


    public function mostrarUsuariosC()
    {
        return $this->usuarioM->mostrarUsuariosM();
    }


    public function elminarUsuariosC()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            return $this->usuarioM->elminarUsuariosM($id);
        }
    }
}
