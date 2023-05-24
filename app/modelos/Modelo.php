<?php 
    require_once 'Conexion.php';
    class Modelo
    {
       protected $conexion;
       public function __construct()
       {
           $this->conexion = new Conexion();
           $this->conexion->getConexion();
           
       }

       public function cerrarConexion()
       {
           $this->conexion->cerrar();
       }
    }
?>