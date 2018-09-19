<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>MARCA</th>
                <th>PRECIO</th>
                <th>STOCK</th>
                <th>MODELO</th>
                <th>CATEGORIA</th>
            </tr>
            <?php include_once ("../controller/mostrarProductos.php"); ?>  
        </table>
    </center>        
             
    </body>
</html>
