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
        <?php
        
        $codigo=$_GET['cod'];

        ?>
        
        <h4> Eliminar el registro COD:<?php echo$codigo;?></h4>
        <p>
            <a href="../controller/deleteProductos.php?cod=<?php echo $codigo; ?>">ACEPTAR</a> &nbsp; &nbsp; 
            <a href="formReporteProductos.php">CANCELAR</a>
        </p>
        
    </body>
</html>
