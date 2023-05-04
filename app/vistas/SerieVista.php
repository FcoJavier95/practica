
<h2>Listado de Pelicualas</h2>
<table class="table table-dark table-striped">
    <thead>
        <th>No.</th>
        <th>Nombre</th>
        <th>Sinopsis</th>
        <th>Duración</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        <?php
        foreach($series as $serie) { ?>
            <tr>
                <td><?= $serie["peliculaId"] ?></td>
                <td><?= $serie["nombre"] ?></td>
                <td ><?= $serie["sinopsis"] ?></td>
                <td><?= $serie["duracion"] ?></td>
                <td>
                    <!-- <?php //echo $variable ?> -->
                    <a href="editarPeli.php?id=<?= $serie['peliculaId'] ?>" class="btn btn-outline-info btn-sm">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-outline-success btn-sm">
                        <i class="fa-brands fa-spotify"></i>
                    </button>
                </td>
            </tr>
            </tr>
        <?php }?>
    </tbody>
</table>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
