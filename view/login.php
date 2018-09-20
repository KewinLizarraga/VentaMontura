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
        <form action="../controller/validarlogin.php" method="post">
            <p>Ingresa con tu Nombre y pasword:</p>
            <table>
                <tr>    
                    <td>Email:</td>
                    <td><input type="text" class="input_field" name="email"/></td>
                </tr>
                <tr>    
                    <td>Pasword:</td>
                    <td><input class="input_field" type="password" name="password"/></td>
                </tr>
                <tr>    
                    <td></td>
                    <td><input type="submit" value="Acceder"/></td>
                </tr>
                
                
            </table>
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>