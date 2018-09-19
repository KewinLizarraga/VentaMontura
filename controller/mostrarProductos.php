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
      "<td>".$fila['id'].
      "</td><td>".$fila['marca'].
      "</td><td>".$fila['precio'].
      "</td><td>".$fila['stock'].
      "</td><td>".$fila['modelo'].
      "</td><td>".$fila['categoria'].
      "</td><td>".
      "<a href='../view/formUpdateProducto.php?cod=".$fila['id']."'><img src='../recursos/edit01.jpg'></a>".
      "<a href='../view/formDeleteProducto.php?cod=".$fila['id']."'><img src='../recursos/delete01.png'></a>".
            
    "</td></tr>";
    
}