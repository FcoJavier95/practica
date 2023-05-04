<?php
    class Conexion
    {
        //Declaracion de atributos
        private $con;

        //Metodos
        public function __construct()
        {
            //$this->con = "HOLA";
            //$this->con
            $this->con  = new mysqli('localhost','root','','db_peliculas');
        }

        public function getConexion(){
            return $this->con;
        }

        public function getQuery($query){
            $resultado = $this->con->query($query);
           // $resultado = $this->con->query("SELECT * FROM pelcula");
           if(!$resultado){
            die("Error, no se pudo acceder a la conexión =>".$this->con->error);
           }

           return $resultado;
        }

        public function cerrar(){
            $this->con->close();
        }




        /////////////////////////////////////////////////////////////
       /*  public function getPelicula(){
            $query = $this->con->query("SELECT * FROM pelicula ORDER BY nombre ASC");
            if (!$query) {
                die('Error en la consulta: ' . $this->con->error);
            }
            $peliculasArr = array();
            while ($row = $query->fetch_assoc()) {
                $peliculasArr[] = $row;
            }
            return $peliculasArr;
            //return $query->fetch_all(MYSQLI_ASSOC);
            //return $this->con->fetchAll();
        } */
    }
?>