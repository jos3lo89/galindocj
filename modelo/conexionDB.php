<?php
class ConexionDBM
{
    private $servidor = "localhost";

    private $usuario = "root";
    private $claveUsuario = "";
    private $dbNombre = "galindocj";

    // private $usuario = "id21784349_joselo33";
    // private $claveUsuario = "Meandu99.";
    // private $dbNombre = "id21784349_portafolio33";

    private $puerto = 3306;
    
    public function connDB()
    {
        $conexion = new mysqli($this->servidor, $this->usuario, $this->claveUsuario, $this->dbNombre, $this->puerto);
        // $conexion = new mysqli($this->servidor, $this->usuario, $this->claveUsuario, $this->dbNombre);
        return $conexion;
    }
}
