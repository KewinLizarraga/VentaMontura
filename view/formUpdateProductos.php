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
        require_once ("../model/producto.php");
        if(isset($_GET['cod']))
        {
            $codigo=$_GET['cod'];
            $cn=new producto();
            $cn->setProductoByCodigo($codigo);
            $marca=$cn->getMarca();
            $precio=$cn->getPrecio();
            $stock=$cn->getStock();
            $modelo=$cn->getModelo();
            $categoria=$cn->getCategoria();
        }
        else
        {
            $codigo="---";
            $marca="---";
            $precio="---";
            $stock="---";
            $modelo="---";
            $categoria="---";
        }
       

        ?>
        
        <form action="../controller/updateProductos.php" method="POST">
            <p>CODIGO: <input type="text" name="codigo" value="<?php echo $codigo; ?>" ></p>
            <p>MARCA: <input type="text" name="marca" value="<?php echo $marca; ?>" ></p>
            <p>PRECIO: <input type="text" name="precio" value="<?php echo $precio; ?>"></p>
            <p>STOCK: <input type="number" name="stock" value="<?php echo $stock; ?>" ></p>
            <p>MODELO: <input type="text" name="modelo" value="<?php echo $modelo; ?>" ></p>
            <p>CATEGORIA: <input type="text" name="categoria" value="<?php echo $categoria; ?>" ></p>
            
            <p><input type="submit" name="btn" value="ACTUALIZAR">
                
            
            </p>
        </form>
    </body>
</html>
