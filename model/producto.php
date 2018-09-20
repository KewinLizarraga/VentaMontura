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
class producto {
    //atributos o caracteristicas
    private $codigo;
    private $marca;
    private $precio;
    private $stock;
    private $modelo;
    private $categoria;
    
    public function __construct() {
        
    }
    
    //metodo de asignacion de valores
    public function setProductoByCodigo($codigo)
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="SELECT *FROM producto WHERE id_producto=".$codigo;
        $resultado=$cn->getEjecucionQuery($sql);

        if($resultado->num_rows > 0) //verifico si tiene registro
        {
            $registro=$resultado->fetch_array(MYSQLI_ASSOC);
            $this->codigo=$registro['id_producto'];
            $this->marca=$registro['marca'];
            $this->precio=$registro['precio'];
            $this->stock=$registro['stock'];
            $this->modelo=$registro['modelo'];
            $this->categoria=$registro['categoria'];
        }
        
        $resultado->free(); // libero recursos usados 
        $cn->cerrarConexion();
        
    }
    
    
    //metodo registro clientes
    public function registrarProductos($marca, $precio, $stock, $modelo, $categoria)
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="INSERT INTO producto(marca,precio,stock,modelo,categoria) VALUES('$marca','$precio','$stock','$modelo','$categoria')";
        return $cn->setEjecucionQuery($sql);
    }
    
    public function actualizaProductos($codigo, $marca, $precio, $stock, $modelo, $categoria)
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="UPDATE producto SET marca='$marca', precio='$precio', stock='$stock', modelo='$modelo', , categoria='$categoria'  WHERE id_producto=$codigo";
        return $cn->setEjecucionQuery($sql);    
    }
    
    public function eliminaProductos($codigo)
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="DELETE FROM producto WHERE id_producto=$codigo";
        return $cn->setEjecucionQuery($sql);    
    }    



    //metodo reporte clientes
    public function getListaProductos()
    {
        $cn=new conexion();
        $cn->conectar();
        $sql="SELECT *FROM producto";
        return $cn->getEjecucionQuery($sql);
    }


    //metodo actualizacion clientes
   
    
    //metodo eliminacion clientes


    
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
     public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getCategoria() {
        return $this->categoria;
    }
    
    
}

