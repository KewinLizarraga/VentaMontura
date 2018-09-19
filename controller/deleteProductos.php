<?php

require_once ("../model/producto.php");
$codigo=$_GET['cod'];

$cn=new producto();
if($cn->eliminaProductos($codigo))
{
    //si se elimino correctamente
    $ruta="location: ../view/formReporteProductos.php";
    header($ruta);
}
else
{
    //si no se elimino
    echo "Error al eliminar";
}

