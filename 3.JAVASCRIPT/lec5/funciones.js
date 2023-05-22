let x = $(document); //invoca a jquery
x.ready(operacion); //cuando la pagina cargue, activará la magia

function operacion()
{
    let capa = $("#primero");
    capa.click(hacemos_click);
}

function hacemos_click()
{
    let x = $("#primero");
    // x.css("color" , "green");
    // x.css("background-color" , "yellow");
    // x.css("font-size" , "24px");
    // x.css("border" , "1px solid black");
    // x.css("width" , "200px");
    // x.css("height" , "150px");
    // forma de hacerlo en una sola linea
    x.css({color: "blue" , backgroundColor: "yellow" ,fontSize: "24px" , border: "1px solid black" , width: "200px" , height: "150px"});
}


$(document).ready(function(){ //constante siempre que uses jquery
    let boton = $("button");  //uso de vbles en jquery, igual que en vanila js
    let cuadrado = $("#cuadrado");
    boton.click(() => {
        CambiarCuadrado();
    });

    function CambiarCuadrado(){
        cuadrado.css("background" , "blue");
    }
})