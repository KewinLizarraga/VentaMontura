<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ("../model/cliente.php");
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
 
$cli=new cliente();
if($cli->actualizaCliente($codigo, $nombre, $apellido, $direccion, $telefono, $email))
{
   //se acutalizo Correctamente
    $ruta="Location: ../view/formReporteClientes.php";
    header($ruta);
}
else 
{
   //no se acutalizo 
    echo "error";

}