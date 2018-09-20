<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("../model/producto.php"); // debo usar la clase PRODUCTO

$marca=$_POST['marca'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$modelo=$_POST['modelo'];
$categoria=$_POST['categoria'];

$obj=new producto();
if($obj->registrarProductos($marca, $precio, $stock, $modelo, $categoria))
{
  $ruta="Location: ../view/formRegistroProductos.php?msj=1";
}
else
{
  $ruta="Location: ../view/formRegistroProductos.php?msj=0";
}

header($ruta);

