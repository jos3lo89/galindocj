<?php

require_once '../modelo/usuarioM.php';
require_once '../controlador/sessionC.php';

$sesionPedirDatos = new SessionC();
$sesionPedirDatos->iniciarSesion();

$pedirDatosUserM = new UsuarioM();
$pedirDatosUserM->datosPerfilUsuarioM($_SESSION['usuario_usuario']);
