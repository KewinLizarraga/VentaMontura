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
        require_once ("../model/cliente.php");
        if(isset($_GET['cod']))
        {
            $codigo=$_GET['cod'];
            $cn=new cliente();
            $cn->setClienteByCodigo($codigo);
            $nombre=$cn->getNombre();
            $apellido=$cn->getApellido();
            $direccion=$cn->getDireccion();
            $telefono=$cn->getTelefono();
            $email=$cn->getEmail();
            
        }
        else
        {
            $codigo="---";
            $nombre="---";
            $apellido="---";
            $direccion="---";
            $telefono="---";
            $email="---";
        }
       

        ?>
        
        <form action="../controller/updateClientes.php" method="POST">
            <p>CODIGO: <input type="text" name="codigo" value="<?php echo $codigo; ?>" ></p>
            <p>NOMBRE: <input type="text" name="nombre" value="<?php echo $nombre; ?>" ></p>
            <p>APELLIDO: <input type="text" name="apellido" value="<?php echo $apellido; ?>"></p>
            <p>DIRECCION: <input type="text" name="direccion" value="<?php echo $direccion; ?>" ></p>
            <p>TELEFONO: <input type="tel" name="telefono" value="<?php echo $telefono; ?>" ></p>
            <p>EMAIL: <input type="email" name="email" value="<?php echo $email; ?>" ></p>
                        </p>
            <p><input type="submit" name="btn" value="ACTUALIZAR">
                
            
            </p>
        </form>
    </body>
</html>
