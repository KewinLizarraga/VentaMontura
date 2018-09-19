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
        if(isset($_GET['msj']))
        {
            if($_GET['msj']==1)
            {
                echo "<p><font color='red'>REGISTRO CORRECTO</font></p>";
            }
            else 
            {
                echo "<p><font color='red'>REGISTRO INCORRECTO</font></p>";
            }
        }
        ?>
        
        <form action="../controller/registraProductos.php" method="POST">
            <p>MARCA: <input type="text" name="marca" ></p>
            <p>PRECIO: <input type="text" name="precio" ></p>
            <p>STOCK: <input type="number" name="stock" ></p>
            <p>MODELO: <input type="text" name="modelo" ></p>
            <p>CATEGORIA: <input type="text" name="categoria" ></p>
            
            <p><input type="submit" name="btn" value="REGISTRAR">
                
            
            </p>
        </form>
             
            
    </body>
</html>
