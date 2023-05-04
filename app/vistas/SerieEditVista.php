
<form id="frmAddPeli" method="POST">
    <h4>Agregar Nueva Pelicula</h4>
    <label for="">Nombre de Pelicula</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <i class="fa fa-plus"></i>
        </span>
        <input value="<?= $series[0]["nombre"] ?>" type="text" onchange="validar()" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre de la peli" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <label for="">Descripción de Pelicula</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">
            <i class="fa fa-plus"></i>
        </span>
        <input value="<?= $series[0]["sinopsis"] ?>" type="text" onchange="validar()" id="desc" name="desc" class="form-control" placeholder="Ingrese la descripción" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>

    <div class="input-group mb-3">
        <button type="submit" class="btn btn-primary" id="btnAdd" name="btnAdd" value="Guardar" disabled>
            <i class="fa fa-plus"></i> Agregar
        </button>
        <a href="index.php" class="btn btn-outline-info btn-sm">
            <i class="fa fa-edit"></i> Regresar
        </a>
    </div>
</form>

<script src="../public/js/addPelicula.js"></script>
