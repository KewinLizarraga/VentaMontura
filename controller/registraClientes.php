<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("../model/cliente.php"); // debo usar la clase CLIENTE

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$password=$_POST['password'];

$obj=new cliente();
if($obj->registrarClientes($nombre, $apellido, $direccion, $telefono, $email, $password))
{
  $ruta="Location: ../view/formRegistroClientes.php?msj=1";
}
else
{
  $ruta="Location: ../view/formRegistroClientes.php?msj=0";
}

header($ruta);

