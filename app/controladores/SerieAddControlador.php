<?php 
    require_once dirname(__FILE__).'/../modelos/Series.php';
    $serie = new Serie();

    $series = $serie->getPelicula();

    require_once dirname(__FILE__).'/../vistas/SerieAddFrmVista.php';

    if(!empty($_POST["btnAdd"])){
        $query = $serie->insPelicula($_POST["nombre"],$_POST["desc"]);
        //header("Location: index.php");
        echo "<script>window.location.href='index.php'</script>";
    } else {
        
    }
?>