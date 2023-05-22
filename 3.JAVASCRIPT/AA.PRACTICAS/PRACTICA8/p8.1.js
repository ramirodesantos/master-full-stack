// 1.
// Crea una funcion que
//  - reciba una palabra y un letra como params
//  - devuelva el indice de donde se encuentra la letra en la palabra

const indiceEnPalabra = (palabra, letra) =>{
    let indice = [];
    let contador = 0;
    palabra = palabra.toLowerCase();
    letra = letra.toLowerCase();
    if(typeof(palabra) == "string" && typeof(letra) == "string"){
       for(i=0; i<palabra.length; i++){
        if(palabra[i] == letra){
            indice[contador]=i;
            contador++;
        }
       }
    }else{
        return "por favor, ingrese una palabra y una letra"
    }

    return indice;
}

var a = indiceEnPalabra("pAlAbra","A")
console.log('a: ', a);


// 2.
// Crea una funcion que
// - reciba un arreglo y un numero como params
// - devuelva los numeros mayores que el numero pasado



// 3.
// Crea una funcion que
// - reciba una palabra
// - devuelva true o false, dependiendo de si la palabra es un palindromo

// 4.
// Crea una funcion que 
// - reciba una palabra como parametro
// - devuelva las letras que existen en la palabra y cuantas veces aparecen