<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$email=$_POST['email'];
$password=$_POST['password'];

// Conexion con la base de datos
$conexion= mysqli_connect("localhost", "root", "", "ventamontura");
$consulta="SELECT * FROM cliente WHERE email='$email' and password='$password'";
$resultado= mysqli_query($conexion, $consulta);

$fila= mysqli_num_rows($resultado);  // Si $resultado = 1, coinciden los datos ($conexion, $consulta)
                                     // Si $resultado = 0, no coinciden los datos ($conexion, $consulta)

if ($fila>0) {
    header("location:../view/formVentas.php");
}
else{
    echo "Error al iniciar sesión";
}

mysqli_free_result($resultado);
mysqli_close($conexion);