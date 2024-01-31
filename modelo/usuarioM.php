<?php
require_once 'conexionDB.php';

class UsuarioM extends ConexionDBM
{

    public function registrarUsuarioM()
    {
        $conexion = ConexionDBM::connDB();

        $usuario = $conexion->real_escape_string($_POST['usuario']);
        $nombre = $conexion->real_escape_string($_POST['nombre']);
        $apellido = $conexion->real_escape_string($_POST['apellido']);
        $correo =  $conexion->real_escape_string($_POST['correo']);
        $clave =  $conexion->real_escape_string($_POST['clave']);
        $rol =  $conexion->real_escape_string($_POST['rol']);
        $pregunta1 =  $conexion->real_escape_string($_POST['pregunta1']);
        $pregunta2 = $conexion->real_escape_string($_POST['pregunta2']);

        $rutaImg = "../vista/fotoPerfil/";
        $rutaImg2 = "vista/fotoPerfil/";

        // Verificando si el correo o usuario ya existen en la base de datos
        $qryConsulta = "SELECT * FROM usuario WHERE usuario_usuario = '$usuario' OR usuario_correo = '$correo'";
        $resultadoConsulta = $conexion->query($qryConsulta);
        if ($resultadoConsulta->num_rows > 0) {
            $fila = $resultadoConsulta->fetch_array(MYSQLI_ASSOC);
            if ($fila['usuario_usuario'] == $usuario) {
                echo "el usuario ya esta registrado";
            } else if ($fila['usuario_correo'] == $correo) {
                echo "el correo ya esta registrado";
            }
        } else {

            $fotoNombre = $_FILES['foto']['name'];
            $fotoTmp = $_FILES['foto']['tmp_name'];

            $direccionFoto = $rutaImg . $fotoNombre;
            $direccionFoto2 = $rutaImg2 . $fotoNombre;

            move_uploaded_file($fotoTmp, $direccionFoto);

            $clave_hash = password_hash($clave, PASSWORD_BCRYPT);

            $qryinsertar = "INSERT INTO `usuario` (`usuario_id`, `usuario_usuario`, `usuario_nombre`, `usuario_apellido`, `usuario_correo`, `usuario_clave`, `usuario_foto`, `usuario_fecha_registro`, `usuario_fecha_modificacion`, `usuario_rol`, `usuario_pregunta1`, `usuario_pregunta2`) VALUES (NULL,'$usuario','$nombre','$apellido','$correo','$clave_hash','$direccionFoto2', current_timestamp(), current_timestamp(), '$rol', '$pregunta1', '$pregunta2')";

            $insertarResultado = $conexion->query($qryinsertar);

            if ($insertarResultado) {
                echo "Usuario registrado";
            } else {
                echo "Error al guardar en la base de datos: ";
            }
        }
    }


    public function ingresarUsuarioM()
    {
        $conexion = ConexionDBM::connDB();

        $usuario = $conexion->real_escape_string($_POST['usuario']);
        $clave = $conexion->real_escape_string($_POST['clave']);

        $qryConsulta = "SELECT * FROM usuario WHERE usuario_usuario = '$usuario';";
        $resultadoConsulta = $conexion->query($qryConsulta);

        if ($resultadoConsulta->num_rows > 0) {
            $fila = $resultadoConsulta->fetch_array(MYSQLI_ASSOC);
            if (password_verify($clave, $fila['usuario_clave'])) {
                // guardando los datos del usuario en la variable SESSION
                $_SESSION['usuario_id'] = $fila['usuario_id'];
                $_SESSION['usuario_usuario'] = $fila['usuario_usuario'];
                $_SESSION['usuario_nombre'] = $fila['usuario_nombre'];
                $_SESSION['usuario_apellido'] = $fila['usuario_apellido'];
                $_SESSION['usuario_correo'] = $fila['usuario_correo'];
                $_SESSION['usuario_clave'] = $fila['usuario_clave'];
                $_SESSION['usuario_foto'] = $fila['usuario_foto'];
                $_SESSION['usuario_rol'] = $fila['usuario_rol'];

                echo "exito al ingresar";
            } else {
                echo "la contraseña es incorrecta";
            }
        } else {
            echo "usuario no registrado";
        }
    }


    public function verificarCorreoPregunta()
    {
        $conexion = ConexionDBM::connDB();

        $correo = isset($_POST['correo']) ? $conexion->real_escape_string($_POST['correo']) : "";
        $pregunta1 = isset($_POST['pregunta1']) ? $conexion->real_escape_string($_POST['pregunta1']) : "";
        $pregunta2 = isset($_POST['pregunta2']) ? $conexion->real_escape_string($_POST['pregunta2']) : "";

        $qryConsultaCorreo = "SELECT * FROM usuario WHERE 	usuario_correo = '$correo';";
        $resultadoConsultaCorreo = $conexion->query($qryConsultaCorreo);
        if ($resultadoConsultaCorreo->num_rows > 0) {
            $fila = $resultadoConsultaCorreo->fetch_array(MYSQLI_ASSOC);
            if ($fila['usuario_pregunta1'] == $pregunta1 && $fila['usuario_pregunta2'] == $pregunta2) {
                $_SESSION['id_usuario'] = $fila['usuario_id'];
                $_SESSION['token_cambiar_contra'] = true;
                echo "continua para cambia la clave";
            } else {
                echo "las preguntas no coinciden";
            }
        } else {
            echo "el correo no esta registrado";
        }
    }


    public function cambiarClaveUsuario()
    {
        $conexion = ConexionDBM::connDB();
        $idUsuario = $_SESSION['id_usuario'];
        $clave = isset($_POST['clave1']) ? $conexion->real_escape_string($_POST['clave1']) : "";
        $clave_hash = password_hash($clave, PASSWORD_BCRYPT);

        $qryCmabiarClave = "UPDATE usuario SET usuario_clave = '$clave_hash', usuario_fecha_modificacion = current_timestamp() WHERE usuario_id = $idUsuario";
        $resultadoCambiarCalve = $conexion->query($qryCmabiarClave);
        if ($resultadoCambiarCalve) {
            unset($_SESSION['id_usuario']);
            unset($_SESSION['token_cambiar_contra']);

            echo "contraseña cambiada con exito";
        } else {
            unset($_SESSION['id_usuario']);
            unset($_SESSION['token_cambiar_contra']);
            echo "error al cambiar la contraseña";
        }
    }

    public function registrarUsuarioRevisorM()
    {
        $conexion = ConexionDBM::connDB();

        $usuario = $conexion->real_escape_string($_POST['usuarioRevisor']);
        $nombre = $conexion->real_escape_string($_POST['nombreRevisor']);
        $apellido = $conexion->real_escape_string($_POST['apellidoRevisor']);
        $correo =  $conexion->real_escape_string($_POST['correoRevisor']);
        $clave =  $conexion->real_escape_string($_POST['claveRevisor']);
        $rol =  "revisor";
        $pregunta1 =  $conexion->real_escape_string($_POST['pregunta1Revisor']);
        $pregunta2 = $conexion->real_escape_string($_POST['pregunta2Revisor']);

        $rutaImg = "../vista/fotoPerfil/";
        $rutaImg2 = "vista/fotoPerfil/";

        // Verificando si el correo o usuario ya existen en la base de datos
        $qryConsulta = "SELECT * FROM usuario WHERE usuario_usuario = '$usuario' OR usuario_correo = '$correo'";
        $resultadoConsulta = $conexion->query($qryConsulta);

        if ($resultadoConsulta->num_rows > 0) {
            $fila = $resultadoConsulta->fetch_array(MYSQLI_ASSOC);
            if ($fila['usuario_usuario'] == $usuario) {
                echo "el usuario ya esta registrado";
            } else if ($fila['usuario_correo'] == $correo) {
                echo "el correo ya esta registrado";
            }
        } else {
            $fotoNombre = $_FILES['fotoRevisor']['name'];
            $fotoTmp = $_FILES['fotoRevisor']['tmp_name'];

            $direccionFoto = $rutaImg . $fotoNombre;
            $direccionFoto2 = $rutaImg2 . $fotoNombre;

            move_uploaded_file($fotoTmp, $direccionFoto);

            $clave_hash = password_hash($clave, PASSWORD_BCRYPT);

            $qryinsertar = "INSERT INTO `usuario` (`usuario_id`, `usuario_usuario`, `usuario_nombre`, `usuario_apellido`, `usuario_correo`, `usuario_clave`, `usuario_foto`, `usuario_fecha_registro`, `usuario_fecha_modificacion`, `usuario_rol`, `usuario_pregunta1`, `usuario_pregunta2`) VALUES (NULL,'$usuario','$nombre','$apellido','$correo','$clave_hash','$direccionFoto2', current_timestamp(), current_timestamp(), '$rol', '$pregunta1', '$pregunta2')";

            $insertarResultado = $conexion->query($qryinsertar);

            if ($insertarResultado) {
                echo "Usuario registrado";
            } else {
                echo "Error al guardar en la base de datos: ";
            }
        }
    }


    public function datosPerfilUsuarioM($usuarioUser)
    {
        $conexion = ConexionDBM::connDB();
        $consulta = "SELECT usuario_id, usuario_usuario, usuario_nombre, usuario_apellido, usuario_correo, usuario_clave, usuario_foto, usuario_rol FROM usuario WHERE usuario_usuario = '$usuarioUser';";
        $resultadoConsulta = $conexion->query($consulta);

        $usuarios = array();
        while ($fila = $resultadoConsulta->fetch_assoc()) {
            $usuarios[] = $fila;
        }

        echo json_encode($usuarios);
    }


    public function actulizarUsuarioM()
    {
        $conexion = ConexionDBM::connDB();

        $usuario = $conexion->real_escape_string($_POST['usuarioA']);
        $nombre = $conexion->real_escape_string($_POST['nombreA']);
        $apellido = $conexion->real_escape_string($_POST['apellidoA']);
        $correo =  $conexion->real_escape_string($_POST['correoA']);

        $rutaImg = "../vista/fotoPerfil/";
        $rutaImg2 = "vista/fotoPerfil/";

        $fotoNombre = $_FILES['fotoA']['name'];
        $fotoTmp = $_FILES['fotoA']['tmp_name'];

        $direccionFoto = $rutaImg . $fotoNombre;
        $direccionFoto2 = $rutaImg2 . $fotoNombre;

        move_uploaded_file($fotoTmp, $direccionFoto);

        $qryinsertar = "UPDATE `usuario` SET `usuario_nombre`='$nombre',`usuario_apellido`='$apellido',`usuario_correo`='$correo',`usuario_foto`='$direccionFoto2',`usuario_fecha_modificacion`= current_timestamp() WHERE usuario_usuario = '$usuario';";

        $insertarResultado = $conexion->query($qryinsertar);

        if ($insertarResultado) {
            echo "datos actualizados";
        } else {
            echo "Error al actualizar los datos";
        }
    }


    public function mostrarUsuariosM()
    {
        $conexion = ConexionDBM::connDB();
        $qryConsultaMostrar = "SELECT * FROM usuario;";
        $resultadoMostrar = $conexion->query($qryConsultaMostrar);
        return $resultadoMostrar;
    }


    public function elminarUsuariosM($id)
    {
        $conexion = ConexionDBM::connDB();
        $qryEliminarUsuario = "DELETE FROM `usuario` WHERE usuario_id = $id;";
        $resultadoEliminar = $conexion->query($qryEliminarUsuario);
        header("location: index.php?ruta=confUsuarios");
        return $resultadoEliminar;
    }
}
