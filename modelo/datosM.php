<?php
require_once 'conexionDB.php';

class DatosM extends ConexionDBM
{
    public function insertarInicioSobreMiM($datos)
    {
        $conexion = ConexionDBM::connDB();
        extract($datos);
        $presentacion = $conexion->real_escape_string($dato1);
        $quienSoy = $conexion->real_escape_string($dato2);
        $miObjetivo = $conexion->real_escape_string($dato3);

        $rutaImg = "vista/img/";

        $fotoNombre = $_FILES['fotoInicio']['name'];
        $fotoTmp = $_FILES['fotoInicio']['tmp_name'];

        $direccionFoto = $rutaImg . $fotoNombre;

        move_uploaded_file($fotoTmp, $direccionFoto);

        $qryInsertar = "UPDATE `inicio_sobre_mi` SET `presentacion`='$presentacion',`quien_soy`='$quienSoy',`mi_objetivo`='$miObjetivo',`dato_foto`='$direccionFoto' WHERE id = 1";
        $resultadoInsertar = $conexion->query($qryInsertar);
        header("location: index.php?ruta=confInicioSobreMi");
        return $resultadoInsertar;
    }

    public function insertarHabilidadesM()
    {
        $conexion = ConexionDBM::connDB();

        $habilidad = $conexion->real_escape_string($_POST['habilidadTxt']);
        $descripcion = $conexion->real_escape_string($_POST['descripcionTxt']);
        $porcentaje = $conexion->real_escape_string($_POST['porcentajeInt']);

        $rutaImg = "../vista/img/";
        $rutaImg2 = "vista/img/";

        $fotoNombre = $_FILES['imgHabilidad']['name'];
        $fotoTmp = $_FILES['imgHabilidad']['tmp_name'];

        $direccionFoto = $rutaImg . $fotoNombre;
        $direccionFoto2 = $rutaImg2 . $fotoNombre; // estp subir a db

        move_uploaded_file($fotoTmp, $direccionFoto);

        $qryinsertar = "INSERT INTO `habilidades`(`habilidad_nombre`, `habilidad_descripcion`, `habilidad_porcentaje`, `habilidad_img`) VALUES ('$habilidad','$descripcion', $porcentaje ,'$direccionFoto2')";

        $insertarResultado = $conexion->query($qryinsertar);

        if ($insertarResultado) {
            echo "Habilidad registrada";
        } else {
            echo "Falló el registro en la base de datos";
        }
    }

    public function insertarProyectosM()
    {
        $conexion = ConexionDBM::connDB();

        $nombre = $conexion->real_escape_string($_POST['proyectoTxt']);
        $descripcion = $conexion->real_escape_string($_POST['descripcionTxt']);
        $github = $conexion->real_escape_string($_POST['githubTxt']);
        $url = $conexion->real_escape_string($_POST['urlTxt']);

        $rutaImg = "../vista/img/";
        $rutaImg2 = "vista/img/";

        $fotoNombre = $_FILES['imgProyecto']['name'];
        $fotoTmp = $_FILES['imgProyecto']['tmp_name'];

        $direccionFoto = $rutaImg . $fotoNombre;
        $direccionFoto2 = $rutaImg2 . $fotoNombre; // estp subir a db

        move_uploaded_file($fotoTmp, $direccionFoto);

        $qryinsertar = "INSERT INTO `proyectos`(`proyectos_nombre`, `proyectos_descripcion`, `proyecto_github`, `proyecto_url`, `proyecto_img`) VALUES ('$nombre','$descripcion','$github','$url','$direccionFoto2')";

        $insertarResultado = $conexion->query($qryinsertar);

        if ($insertarResultado) {
            echo "Proyecto registrado";
        } else {
            echo "Error al guardar en la base de datos";
        }
    }


    public function mostrarInicioSobreMiM()
    {
        $conexion = ConexionDBM::connDB();
        $qryMostrar = "SELECT * FROM `inicio_sobre_mi` WHERE id = 1";
        $resultadoMostrar = $conexion->query($qryMostrar);
        $fila = $resultadoMostrar->fetch_array(MYSQLI_ASSOC);
        $datosMostrar = array(
            "presentacion" => $fila['presentacion'],
            "quienSoy" => $fila['quien_soy'],
            "miObjetivo" => $fila['mi_objetivo'],
            "datoFoto" => $fila['dato_foto'],
        );

        return $datosMostrar;
    }


    public function mostrarInicioSobreMiAjaxM()
    {
        $conexion = ConexionDBM::connDB();
        $qryMostrar = "SELECT * FROM `inicio_sobre_mi` WHERE id = 1";
        $resultadoMostrar = $conexion->query($qryMostrar);

        $datosMostrar = array();
        while ($fila = $resultadoMostrar->fetch_assoc()) {
            $datosMostrar[] = $fila;
        }

        echo json_encode($datosMostrar);
    }

    public function mostrarHabilidadesM()
    {
        $conexion = ConexionDBM::connDB();
        $qryConsultaHabilidades = "SELECT * FROM habilidades;";
        $resultadoHabilidades = $conexion->query($qryConsultaHabilidades);
        return $resultadoHabilidades;
    }

    public function mostrarHabilidadesActuaM($idHabilidad)
    {
        $conexion = ConexionDBM::connDB();
        $qryConsultaHabilidades = "SELECT * FROM habilidades WHERE habilidad_id = $idHabilidad;";
        $resultadoHabilidades = $conexion->query($qryConsultaHabilidades);
        $fila = $resultadoHabilidades->fetch_array(MYSQLI_ASSOC);
        $datosHablidad = array(
            "id_habilidad" => $fila['habilidad_id'],
            "habilidad" => $fila['habilidad_nombre'],
            "descripcion" => $fila['habilidad_descripcion'],
            "porcentaje" => $fila['habilidad_porcentaje'],
        );
        return $datosHablidad;
    }

    public function mostrarProyectosActuaC($idProyecto)
    {
        $conexion = ConexionDBM::connDB();
        $qryMostrarProyectoActua = "SELECT * FROM proyectos WHERE proyecto_id = $idProyecto;";
        $resultadoProyectoActua = $conexion->query($qryMostrarProyectoActua);
        $fila = $resultadoProyectoActua->fetch_array(MYSQLI_ASSOC);
        $datoProyecto = array(
            "id_proyecto" => $fila['proyecto_id'],
            "nombre" => $fila['proyectos_nombre'],
            "descreipcion" => $fila['proyectos_descripcion'],
            "gtihub" => $fila['proyecto_github'],
            "url" => $fila['proyecto_url'],
        );
        return $datoProyecto;
    }

    public function mostrarProyectosM()
    {
        $conexion = ConexionDBM::connDB();
        $qryMostrarProyecto = "SELECT * FROM proyectos;";
        $resultadoProyecto = $conexion->query($qryMostrarProyecto);
        return $resultadoProyecto;
    }


    public function borraHabilidadM($idHabilidad)
    {
        $conexion = ConexionDBM::connDB();
        $qryBorrar = "DELETE FROM `habilidades` WHERE habilidad_id  = $idHabilidad";
        $resultadoBorrar = $conexion->query($qryBorrar);
        header("location: index.php?ruta=confHabilidades");
        return $resultadoBorrar;
    }

    public function borrarProyectoM($idProyecto)
    {
        $conexion = ConexionDBM::connDB();
        $qryBorrar = "DELETE FROM `proyectos` WHERE proyecto_id  = $idProyecto";
        $resultadoBorrar = $conexion->query($qryBorrar);
        header("location: index.php?ruta=confProyectos");
        return $resultadoBorrar;
    }


    public function actualizarHabilidadM($idHabilidad, $datosHabilidad)
    {
        $conexion = ConexionDBM::connDB();
        extract($datosHabilidad);

        $habilidad = $conexion->real_escape_string($dato1);
        $descripcion = $conexion->real_escape_string($dato2);
        $porcentaje = $conexion->real_escape_string($dato3);

        $rutaImg = "vista/img/";

        $fotoNombre = $_FILES['imgHabilidadA']['name'];
        $fotoTmp = $_FILES['imgHabilidadA']['tmp_name'];

        $direccionFoto = $rutaImg . $fotoNombre;

        move_uploaded_file($fotoTmp, $direccionFoto);

        $qryActualizar = "UPDATE `habilidades` SET `habilidad_nombre`='$habilidad',`habilidad_descripcion`='$descripcion',`habilidad_porcentaje`='$porcentaje',`habilidad_img`='$direccionFoto' WHERE habilidad_id = $idHabilidad";

        $resultadoActualizar = $conexion->query($qryActualizar);
        header("location: index.php?ruta=actualizarHabilidad&id=$idHabilidad");
        return $resultadoActualizar;
    }

    public function actualizarProyectoM($idProyecto, $datosProyecto)
    {
        $conexion = ConexionDBM::connDB();
        extract($datosProyecto);

        $proyecto = $conexion->real_escape_string($dato1);
        $descripcion = $conexion->real_escape_string($dato2);
        $github = $conexion->real_escape_string($dato3);
        $url = $conexion->real_escape_string($dato4);

        $rutaImg = "vista/img/";

        $fotoNombre = $_FILES['imgProyectoA']['name'];
        $fotoTmp = $_FILES['imgProyectoA']['tmp_name'];

        $direccionFoto = $rutaImg . $fotoNombre;

        move_uploaded_file($fotoTmp, $direccionFoto);

        $qryActualizar = "UPDATE `proyectos` SET `proyectos_nombre`='$proyecto',`proyectos_descripcion`='$descripcion',`proyecto_github`='$github',`proyecto_url`='$url',`proyecto_img`='$direccionFoto' WHERE proyecto_id = $idProyecto";

        $resultadoActualizar = $conexion->query($qryActualizar);
        header("location: index.php?ruta=actualizarProyecto&id=$idProyecto");
        return $resultadoActualizar;
    }
}
