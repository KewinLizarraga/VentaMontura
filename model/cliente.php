<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente
 *
 * @author RICHARD
 */
require_once ("conexion.php");
class cliente {
    //atributos o caracteristicas
    private $codigo;
    private $nombre;
    private $apellido;
    private $direccion;
    private $telefono;
    private $email;
    private $password;
    
    
    public function __construct() {
        
    }
    
    //metodo de asignacion de valores
    public function setClienteByCodigo($codigo)
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="SELECT *FROM cliente WHERE id_cliente=".$codigo;
        $resultado=$cn->getEjecucionQuery($sql);
        if($resultado->num_rows > 0) //verifico si tiene registro
        {
            $registro=$resultado->fetch_array(MYSQLI_ASSOC);
            $this->codigo=$registro['id_cliente'];
            $this->nombre=$registro['nombre'];
            $this->apellido=$registro['apellido'];
            $this->direccion=$registro['direccion'];
            $this->telefono=$registro['telefono'];
            $this->email=$registro['email'];
            $this->password=$registro['password'];
        }
        
        $resultado->free(); // libero recursos usados 
        $cn->cerrarConexion();
        
    }
    
    
    //metodo registro clientes
    public function registrarClientes($nombre, $apellido, $direccion, $telefono, $email, $password)
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="INSERT INTO cliente(nombre,apellido,direccion,telefono,email,password) VALUES('$nombre','$apellido','$direccion','$telefono','$email','$password')";
        return $cn->setEjecucionQuery($sql);
    }
    
    public function actualizaCliente($codigo, $nombre, $apellido, $direccion, $telefono, $email, $password)
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="UPDATE cliente SET nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono', email='$email', password='$password'  WHERE id_cliente=$codigo";
        return $cn->setEjecucionQuery($sql);    
    }
    
    public function eliminaCliente($codigo)
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="DELETE FROM cliente WHERE id_cliente=$codigo";
        return $cn->setEjecucionQuery($sql);    
    }    



    //metodo reporte clientes
    public function getListaClientes()
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="SELECT *FROM cliente";
        return $cn->getEjecucionQuery($sql);
    }


    //metodo actualizacion clientes
   
    
    //metodo eliminacion clientes

       
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    
    
}

