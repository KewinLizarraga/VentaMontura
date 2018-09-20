<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("../model/producto.php");

$obj=new producto();
$resultado=$obj->getListaProductos();
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>".
      "<td>".$fila['id_producto'].
      "</td><td>".$fila['marca'].
      "</td><td>".$fila['precio'].
      "</td><td>".$fila['stock'].
      "</td><td>".$fila['modelo'].
      "</td><td>".$fila['categoria'].
      "</td><td>".
      "<a href='../view/formUpdateProductos.php?cod=".$fila['id_producto']."'><img src='../recursos/edit.png' width='30px'></a>".
      "<a href='../view/formDeleteProductos.php?cod=".$fila['id_producto']."'><img src='../recursos/delete.png' width='30px'></a>".
            
    "</td></tr>";
    
}