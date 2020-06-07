let enviar = document.getElementById("enviar");
let añadirAsignaturas = document.getElementById("añadirAsignatura");

let i = 0;

/*añadirAsignaturas.addEventListener("click", function(){
    //Contador para saber que campo ha de ocultar
    i++;
    
    //Ocultamos el campo error para las nuevas asignaturas
    errorAsignaturas[i].className = "ocultarError";
});*/

enviar.addEventListener("click", validar);

function validar(){
    event.preventDefault();
    let asignaturas = $("input[type='text']");
    let errorAsignaturas = $("form p");
    let validaciones = [];
    let i = 0;
    
    //Comprobamos el valor (true/false) de los campos para comprobar si estan vacios o estan correctamente escritos
    for(let asignatura of asignaturas){ 
        if(campoVacio(asignatura, errorAsignaturas[i])){
            validaciones[i] = false;
        }else{
            let expresion = /^(([A-Z][a-z|á|é|í|ó|ú]+|[a-z|I|V|X]*)| *)+$/;
            let mensaje = "El formato no puede llevar numeros";
            
            validaciones[i] = comprobarExpresion(asignatura, errorAsignaturas[i], expresion, mensaje);
        }
        i++;
    }
    
    //Elementos que tiene el array
    let elementosArray = validaciones.length;
    let elementosTrue = 0;
    
    //Por cada elemento comprobamos si esta correcto(true)
    for(let elemento of validaciones){
        if(elemento){
            elementosTrue++;
        }
    }
    
    //Si todos los elementos estan bien(true), enviamos el formulario
    if(elementosArray === elementosTrue){
        document.getElementById("formularioAsignaturas").submit();
    }
}