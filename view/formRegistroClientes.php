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
        
        <form action="../controller/registraClientes.php" method="POST">
            <p>NOMBRE: <input type="text" name="nombre" ></p>
            <p>APELLIDO: <input type="text" name="apellido" ></p>
            <p>DIRECCION: <input type="text" name="direccion" ></p>
            <p>TELEFONO: <input type="tel" name="telefono" ></p>
            <p>EMAIL: <input type="email" name="email" ></p>
            <p>PASSWORD: <input type="password" name="password" ></p>
             
            <p><input type="submit" name="btn" value="REGISTRAR"></p>
        </form>      
    </body>
</html>
