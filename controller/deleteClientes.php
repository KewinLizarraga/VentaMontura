<?php

require_once ("../model/cliente.php");
$codigo=$_GET['cod'];

$cn=new cliente();
if($cn->eliminaCliente($codigo))
{
    //si se elimino correctamente
    $ruta="location: ../view/formReporteClientes.php";
    header($ruta);
}
else
{
    //si no se elimino
    echo "Error al eliminar";
}

