

function validar(){
    let nombre = $('#nombre').val();
    let desc = $('#desc').val();
    $('#btnAdd').attr('disabled',true);
    if(nombre == ""){
        //alert("Ingrese el nombre de la pelicula para continuar");
    } else if(desc == ""){
       // alert("Ingrese el nombre de la pelicula para continuar");
    } else {
        Swal.fire(
            'Éxito!',
            'Esta listo para guardar la pelicula',
            'success'
        );
        $('#btnAdd').attr('disabled',false);
        
    }
}