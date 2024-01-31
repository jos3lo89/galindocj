<?php
require_once '../modelo/usuarioM.php';
require_once '../controlador/sessionC.php';

$sesionCambiarContra = new SessionC();
$sesionCambiarContra->iniciarSesion();


$usuarioM = new UsuarioM();
$usuarioM->verificarCorreoPregunta();
