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
            <div class="row">
                <div class="col-md-4">
                        <?php 
                            require('../app/controladores/SerieAddControlador.php');
                        ?>
                        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%"></div>
                        </div>
                        <div class="spinner-border text-success" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                </div>
                <div class="col-md-8">
                        <?php 
                           require('../app/controladores/SerieControlador.php');
                        ?>
                </div>
            </div>
                
        </div>
    </body>
</html>
<script src="../vendor/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../vendor/node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="js/guia2.js"></script>