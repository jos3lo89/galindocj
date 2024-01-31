<?php
require_once '../modelo/usuarioM.php';
require_once '../controlador/sessionC.php';

$sesionCambioClave = new SessionC();
$sesionCambioClave->iniciarSesion();

$cambiaClaveM = new UsuarioM();
$cambiaClaveM->cambiarClaveUsuario();
