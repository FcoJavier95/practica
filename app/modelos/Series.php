<?php 
    require_once 'Modelo.php';
    
    class Serie extends Modelo
    {
        private $con;
        public function __construct(){
            $this->con = new Conexion();
            $this->con->getConexion();
        }

        public function getPelicula(){
            $query = $this->con->getQuery("SELECT * FROM pelicula ORDER BY nombre");
            if(!$query){
                die("Error al obtener los dato=>".$this->con->error);
            }

            $peliculaArray = array();

            while($row = $query->fetch_assoc())
            {
                $peliculaArray[] = $row;
            }

            return $peliculaArray;
        }

        public function editPelicula($id){
            $query = $this->con->getQuery("SELECT * FROM pelicula WHERE peliculaId = '$id'");
            if(!$query){
                die("Error al obtener los datos de la pelicula".$this->con->error);
            }

            $peliculaArray = array();

            while($row = $query->fetch_assoc()){
                $peliculaArray[] = $row;
            }

            return $peliculaArray;
        } 



        public function insPelicula($pelicula,$desc){
            $query = $this->con->getQuery("INSERT INTO pelicula (nombre,sinopsis) VALUES ('$pelicula','$desc')");
            if(!$query){
                die("Error al obtener los dato=>".$this->con->error);
            }

            return 1;
        }

        public function updPelicula($pelicula,$desc,$id){
            $query = $this->con->getQuery("UPDATE pelicula SET nombre='$pelicula',sinopsis='$desc' WHERE peliculaId='$id'");
            if(!$query){
                die("Error al obtener los dato=>".$this->con->error);
            }

            return 1;
        }

        public function delPelicula($id){
            $query = $this->con->getQuery("DELETE FROM pelicula WHERE peliculaId='$id'");
            if(!$query){
                die("Error, no se puede eliminar la pelicula seleccionada ".$this->con->error);
            }

            return 1;
        }

        
    }
?>