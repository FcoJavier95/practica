function operacion(){
    //alert("Estamos aqui");
    let a = $("#n1").val();
    let b = $("#n2").val();

    a = parseFloat(a);
    b = parseFloat(b);

    let suma = a + b;

    $("#resultado").val(suma);
}

function dobleCLick(){
    alert("usted ha dado doble clic");
}