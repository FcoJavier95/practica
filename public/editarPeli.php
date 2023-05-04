<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de Series</title>

        <!-- Eportar archivos -->
        <link rel="stylesheet" href="../vendor/node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../vendor/node_modules/sweetalert2/dist/sweetalert2.css">
        <link rel="stylesheet" href="../vendor/node_modules/@fortawesome/fontawesome-free/css/all.css">
        <script src="../vendor/node_modules/jquery/dist/jquery.js"></script>
        
    </head>
    <body>
        <div class="container mt-3">
            <?php 
                require('../app/controladores/SerieEditControlador.php');
            ?>
                
        </div>
    </body>
</html>
<script src="../vendor/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../vendor/node_modules/sweetalert2/dist/sweetalert2.js"></script>