<?php 
    require_once dirname(__FILE__).'/../modelos/Series.php';
    $serie = new Serie();

    $peliculaId = $_REQUEST["id"];
    
    $series = $serie->editPelicula($peliculaId);
    
    require_once dirname(__FILE__).'/../vistas/SerieEditVista.php';

    if(!empty($_POST["btnAdd"])){
        $query = $serie->updPelicula($_POST["nombre"],$_POST["desc"],$peliculaId);
        //header("Location: index.php");
        echo "<script>window.location.href='index.php'</script>";
    } else {
        
    }
?>