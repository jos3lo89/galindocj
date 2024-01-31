<?php
class RutasC
{
    public $rutasM;

    public function __construct()
    {
        $this->rutasM = new rutasM();
    }

    public function procesarRutasC()
    {
        if (isset($_GET['ruta'])) {
            $ruta = $_GET['ruta'];
        } else {
            $ruta = 'index';
        }

        $direcionUrl = $this->rutasM->procesarRutasM($ruta);
        return $direcionUrl;
    }


    public function protegeRutaRegistrar()
    {
        if (isset($_GET['ruta'])) {
            $ruta = $_GET['ruta'];
            if ($ruta == 'registrar' || $ruta == 'confUsuarios') {
                if ($_SESSION['usuario_rol'] == 'revisor' || !isset($_SESSION['usuario_rol'])) {
                    header("location: index.php?ruta=inicio");
                }
            }
        }
    }


    public function protegeRutaCambiarClave()
    {
        if (isset($_GET['ruta'])) {
            $ruta = $_GET['ruta'];
            if ($ruta == 'cambiarClave') {
                if (!isset($_SESSION['token_cambiar_contra']) && !isset($_SESSION['id_usuario'])) {
                    header("location: index.php?ruta=inicio");
                }
            }
        }
    }

    public function protegeRutaConfC()
    {
        if (isset($_GET['ruta'])) {
            $ruta = $_GET['ruta'];
            if (
                $ruta == 'confInicioSobreMi' ||
                $ruta == 'confHabilidades' ||
                $ruta == 'confProyectos' ||
                $ruta == 'registrarProyecto' ||
                $ruta == 'actualizarProyecto'
            ) {
                if (!isset($_SESSION['usuario_rol'])) {
                    header("location: index.php?ruta=inicio");
                }
            }
        }
    }

    public function protegeRutaConfPerfil()
    {
        if (isset($_GET['ruta'])) {
            $ruta = $_GET['ruta'];
            if ($ruta == 'miPerfil' || $ruta == 'confPerfil' || $ruta == 'registrarHabilidad' || $ruta == 'actualizarHabilidad') {
                if (!isset($_SESSION['usuario_rol'])) {
                    header("location: index.php?ruta=inicio");
                }
            }
        }
    }
}
