<?php

include("basedatos.php");

if(isset($_POST["boton"])){

    //$cedula=$_POST["cedula"];
    $nombre=$_POST["nombre"];
    /*$apellido=$_POST["apellido"];
    $edad=$_POST["edad"];
    $telefono=$_POST["telefono"];
    $direccion=$_POST["direccion"];*/

    $operacion= new Basedatos();

    $consulta="INSERT INTO usuarios(nombre) VALUES ('$nombre')";

    $operacion->alterarBasedatos($consulta);
}

?>

