
/* ------------------------------------------------------------------------------------------------------------------ */
/*                                                  Tipos de datos JS                                                 */
/* ------------------------------------------------------------------------------------------------------------------ */

var nombre  = "Enoc";// String
let edad    = 25;//number
const PI    = 3.1416;// Por lo general el nombre de las variables que son constantes de escriben en mayusculas, como PI que ese número no cambiará nunca


let mayorEdad;
if(edad <= 17){
    mayorEdad = false;
} else {
    mayorEdad = true;
}

let vacio = null;
let indefinido = undefined;
let arreglo = ["Henry","Martinez",19,false,null,undefined];




// Imprimir el contenido de cada variable
//console.log(nombre);
//console.log(arreglo.length);
//console.log(PI);

// Para ver el tipo de dato de cada vaiable
// typeof se utiliza para saber el tipo de dato que tiene la variable js
/* console.log(typeof nombre);
console.log(typeof edad);
console.log(typeof PI); */

/* ------------------------------------------------------------------------------------------------------------------ */
/*                                                        TAREA                                                       */
/* ------------------------------------------------------------------------------------------------------------------ */
/* 
    Declarar variables de tipo booleanaos, decimal,Null, Undefined y arreglo 
    Asignar un valor a cada variable e imprimir el contenido y tipo de dato en consola usando console.log();
    NOTA: En javascript se concadena usando el signo + ("Ni nombre es " + nombre)
*/


// PARTE 2
var x = 10;
var y = 5;

x++;

//x = x+y;
x += y;
 //console.log(x); // imprime 15
/* console.log(x - y); // imprime 5
console.log(x * y); // imprime 50
console.log(x / y); // imprime 2
console.log(x % y); // imprime 0*/


if (edad >= 18) {
    console.log("Eres mayor de edad");
} else {
    console.log("Eres menor de edad");
}

console.log("La suma es" + suma(x,y) + " seguimos escribiendo");
console.log(`La suma es ${suma(x,y)} seguimos escrib`);





function suma(a,b){
    return a + b;
}

/* ------------------------------------------------------------------------------------------------------------------ */
/*                                                        TAREA                                                       */
/* ------------------------------------------------------------------------------------------------------------------ */
/* Hacer todas las funciones de suma,resta,multiplicacion y division y que se imprima como en la linea 47  console.log("La suma es"+ suma(x+b));*/

