<?php
require_once '../modelo/usuarioM.php';
require_once '../controlador/sessionC.php';

$sesionIngresar = new SessionC();
$sesionIngresar->iniciarSesion();

$ingresarM = new UsuarioM();
$ingresarM->ingresarUsuarioM();
