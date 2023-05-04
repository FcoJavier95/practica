
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
                    <a onclick="del(<?= $serie['peliculaId'] ?>)" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            </tr>
        <?php }?>
    </tbody>
</table>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>

<script>
    function del(id){
        Swal.fire({
            title: '¿Eliminar?',
            text: "Lo datos no se pueden recuperar despues de eliminados!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'SI, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href=`editarPeli.php?id=${id}&del=1`;
            }
        })
    }
    
</script>
