<?php
class rutasM
{
    public function procesarRutasM($ruta)
    {
        if (
            $ruta == 'inicio' || // todos
            $ruta == 'sobreMi' || // todos
            $ruta == 'registrar' || // todos
            $ruta == 'ingresar' || // todos
            $ruta == 'recuperarClave' || // todos
            $ruta == 'contacto' || // todos
            $ruta == 'proyectos' || // todos
            $ruta == 'habilidades' || // todos
            $ruta == 'registrarRevisor' || // todos
            $ruta == 'cambiarClave' || // solo con las preguntas
            $ruta == 'miPerfil' ||  // solo con sesion de admin y revisor
            $ruta == 'confInicioSobreMi' || // solo con sesion de admin y revisor
            $ruta == 'confHabilidades' || // solo con sesion de admin y revisor
            $ruta == 'confProyectos' || // solo con sesion de admin y revisor
            $ruta == 'confPerfil' || // solo con sesion de admin y revisor
            $ruta == 'registrarHabilidad' || // solo con sesion de admin y revisor
            $ruta == 'actualizarHabilidad' || // solo con sesion de admin y revisor
            $ruta == 'registrarProyecto' || // solo con sesion de admin y revisor
            $ruta == 'actualizarProyecto' || // solo con sesion de admin y revisor
            $ruta == 'confUsuarios' // solo con sesion de admin
        ) {
            $direccionUrl = "vista/modulos/" . $ruta . ".php";
        } elseif ($ruta == 'index') {
            $direccionUrl = "vista/modulos/inicio.php";
        } else {
            $direccionUrl = "vista/modulos/inicio.php";
        }

        return $direccionUrl;
    }
}
