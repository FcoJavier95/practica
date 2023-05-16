
<form id="frmAddPeli" method="POST">
    <!-- <h4>Agregar Nueva Pelicula</h4>
    <label for="">Nombre de Pelicula</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
            <i class="fa fa-plus"></i>
        </span>
        <input type="text" onchange="validar()" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre de la peli" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <label for="">Descripción de Pelicula</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">
            <i class="fa fa-plus"></i>
        </span>
        <input type="text" onchange="validar()" id="desc" name="desc" class="form-control" placeholder="Ingrese la descripción" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>-->

    <label for="">Número 1</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">
            <i class="fa fa-plus"></i>
        </span>
        <input type="number" id="n1" name="n1" class="form-control" placeholder="Ingrese el primer número" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div> 

    <label for="">Número 2</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">
            <i class="fa fa-plus"></i>
        </span>
        <input type="number" id="n2" name="n2" class="form-control" placeholder="Ingrese el segundo número" aria-label="Recipient's username" aria-describedby="basic-addon2"  onchange="operacion();">
    </div>

    <div class="input-group mb-3">
        <button type="button" class="btn btn-primary" id="btnSuma" name="btnSuma" value="Guardar" onclick="operacion();" ondblclick="dobleCLick();">
            <i class="fa fa-plus"></i> Sumar
        </button>
    </div>

    <label for="">Resultado</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">
            <i class="fa fa-plus"></i>
        </span>
        <input type="number" id="resultado" name="resultado" class="form-control" placeholder="Acá se mostrará el resultado" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>

    <!-- <div class="input-group mb-3">
        <button type="submit" class="btn btn-primary" id="btnAdd" name="btnAdd" value="Guardar" disabled>
            <i class="fa fa-plus"></i> Agregar
        </button>
    </div> -->
</form>

<script src="../public/js/addPelicula.js"></script>
<script src="../public/js/ejercicio.js"></script>
