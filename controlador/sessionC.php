<?php

class SessionC
{

    public function iniciarSesion()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_name("joselo");
            session_start();
        }

        // regenera el id 
        session_regenerate_id(true);

        $this->verificarSesion();

        return session_status() == PHP_SESSION_ACTIVE;
    }

    private function verificarSesion()
    {
        if (isset($_SESSION['ip']) && $_SESSION['ip'] !== $_SERVER['REMOTE_ADDR']) {
            $this->diferenteUsuario();
        }

        if (isset($_SESSION['ua']) && $_SESSION['ua'] !== $_SERVER['HTTP_USER_AGENT']) {
            $this->diferenteUsuario();
        }

        if (isset($_SESSION['check']) && $_SESSION['check'] !== $this->generarHash()) {
            $this->diferenteUsuario();
        }
    }

    public function cerrarSesionC()
    {
        session_unset();
        session_destroy();
    }

    private function diferenteUsuario()
    {
        $this->cerrarSesionC();
        header('Location: index.php?ruta=inicio');
        exit();
    }

    private function generarHash()
    {
        return hash('ripemd128', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
    }
}
