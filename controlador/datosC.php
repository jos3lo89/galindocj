<?php

class DatosC
{

    public $datosM;

    public function __construct()
    {
        $this->datosM = new DatosM();
    }


    public function insertarInicioSobreMiC()
    {
        if (isset($_POST['actualizarInicioSobreMi'])) {
            $datos = array(
                "dato1" =>  $_POST['textoinicio'],
                "dato2" => $_POST['textoQuienSoy'],
                "dato3" => $_POST['textoObjetivo'],
                "dato4" => $_POST['fotoInicio']
            );

            $resultado = $this->datosM->insertarInicioSobreMiM($datos);
            return $resultado;
        }
    }


    /* mostrar inicioy  sobre mi */
    public function mostrarInicioSobreMiC()
    {
        $resultado = $this->datosM->mostrarInicioSobreMiM();
        return $resultado;
    }

    /* Mostrar Habilidades */
    public function mostrarHabilidadesC()
    {
        return $this->datosM->mostrarHabilidadesM();
    }

    /* Mostrar Habilidades actualizar */
    public function mostrarHabilidadesActuaC()
    {
        if (isset($_GET['id'])) {
            $idHabilidad = $_GET['id'];
            return $this->datosM->mostrarHabilidadesActuaM($idHabilidad);
        }
    }

    /* Mostrar proyectos */
    public function mostrarProyectosC()
    {
        return $this->datosM->mostrarProyectosM();
    }

    /* mostra proyectos actualizar */
    public function mostrarProyectosActuaC()
    {
        if (isset($_GET['id'])) {
            $idProyecto = $_GET['id'];
            return $this->datosM->mostrarProyectosActuaC($idProyecto);
        }
    }




    public function borraHabilidadC()
    {
        if (isset($_GET['id'])) {
            $idHabilidad = $_GET['id'];
            return $this->datosM->borraHabilidadM($idHabilidad);
        }
    }

    public function borrarProyectoC()
    {
        if (isset($_GET['id'])) {
            $idProyecto = $_GET['id'];
            return $this->datosM->borrarProyectoM($idProyecto);
        }
    }


    public function actualizarHabilidadC()
    {
        if (isset($_POST['actualizar_habilidad'])) {
            $idHabilidad = $_POST['idHabilidad'];

            $datosHabilidad = array(
                "dato1" => $_POST['habilidadTxtA'],
                "dato2" => $_POST['descripcionTxtA'],
                "dato3" => $_POST['porcentajeIntA'],
                "dato4" => $_POST['imgHabilidadA'],
            );
            return $this->datosM->actualizarHabilidadM($idHabilidad, $datosHabilidad);
        }
    }

    public function actualizarProyectoC()
    {
        if (isset($_POST['actualizar_proyecto'])) {
            $idProyecto = $_POST['idProyecto'];
            $datosProyecto = array(
                "dato1" => $_POST['ProyectoTxtA'],
                "dato2" => $_POST['descripcionTxtA'],
                "dato3" => $_POST['githubLinkA'],
                "dato4" => $_POST['urlLinkA'],
                "dato5" => $_POST['imgProyectoA'],
            );
            return $this->datosM->actualizarProyectoM($idProyecto, $datosProyecto);
        }
    }
}
