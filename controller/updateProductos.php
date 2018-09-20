<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ("../model/producto.php");
$codigo=$_POST['codigo'];
$marca=$_POST['marca'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$modelo=$_POST['modelo'];
$categoria=$_POST['categoria'];
 
$cli=new producto();
if($cli->actualizaProductos($codigo, $marca, $precio, $stock, $modelo, $categoria))
{
   //se acutalizo Correctamente
    $ruta="location: ../view/formReporteProductos.php";
    header($ruta);
}
else 
{
   //no se acutalizo 
    echo "error";

}