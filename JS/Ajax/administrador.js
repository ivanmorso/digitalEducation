let añadir = document.getElementById("añadir");
let mostrar = document.getElementById("mostrar");
let borrar = document.getElementById("borrar");

añadir.addEventListener("click", function(){
    accion("seleccionarInsercion.php");
});

mostrar.addEventListener("click", function(){
    
});

borrar.addEventListener("click", function(){
    
});

function accion(nombreArchivo){
    fetch(nombreArchivo, {
        method: "POST"
    })
        .then(respuesta => respuesta.text())
        .then(function(data){
            document.getElementById("main").innerHTML = data;
    
        });
}

