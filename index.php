<?php
ob_start();
// controladores
require_once 'controlador/rutasC.php';
require_once 'controlador/sessionC.php';
require_once 'controlador/usuarioC.php';
require_once 'controlador/datosC.php';
// modelos
require_once 'modelo/rutasM.php';
require_once 'modelo/usuarioM.php';
require_once 'modelo/datosM.php';

// plantilla
require_once 'vista/plantilla.php';
ob_end_flush();
