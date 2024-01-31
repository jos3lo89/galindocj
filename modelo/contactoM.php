<?php
require_once 'conexionDB.php';

class ContactoM extends ConexionDBM
{
    public function contactar()
    {
        $conexion = ConexionDBM::connDB();

        $nombre = isset($_POST['nombre']) ? $conexion->real_escape_string($_POST['nombre']) : "";
        $correo = isset($_POST['correo']) ? $conexion->real_escape_string($_POST['correo']) : "";
        $mensaje = isset($_POST['mensaje']) ? $conexion->real_escape_string($_POST['mensaje']) : "";

        // datos para enviar
        $para = "jos3luis558@gmail.com";
        $titulo = "mensaje de: " . $nombre . " correo: " . $correo;
        $message = $mensaje;
        $cabeceras = 'From: ' . $correo . '' . "\r\n" .
            'Reply-To: ' . $correo . '' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $contactoMensaje = mail($para, $titulo, $message, $cabeceras);
        if ($contactoMensaje) {
            echo "Mensaje enviado.";
        } else {
            echo "Error al enviar el mensaje";
        }
    }
}
