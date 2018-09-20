<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("../model/cliente.php");

$obj=new cliente();
$resultado=$obj->getListaClientes();
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>".
      "<td>".$fila['id_cliente'].
      "</td><td>".$fila['nombre'].
      "</td><td>".$fila['apellido'].
      "</td><td>".$fila['direccion'].
      "</td><td>".$fila['telefono'].
      "</td><td>".$fila['email'].
      "</td><td>".$fila['password'].
      "</td><td>".
      "<a href='../view/formUpdateCliente.php?cod=".$fila['id_cliente']."'><img src='../recursos/edit.png' width='30px'></a>".
      "<a href='../view/formDeleteCliente.php?cod=".$fila['id_cliente']."'><img src='../recursos/delete.png' width='30px'></a>".
            
    "</td></tr>";
    
}