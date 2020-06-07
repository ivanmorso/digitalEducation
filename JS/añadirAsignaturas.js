let añadirAsignatura = document.getElementById("botonAsignatura");
let formulario = document.getElementById("formularioAsignaturas");

añadirAsignatura.addEventListener("click", function(){
    event.preventDefault();
    //Creo los objetos 
    let label = document.createElement("label");
    let input = document.createElement("input");
    let parrafo = document.createElement("p");
    let div = document.createElement("div");
    
    //Propiedades de los objetos creados
    input.setAttribute("type", "text");
    input.setAttribute("name", "asignaturas[]");
    input.setAttribute("class", "asignatura");
    parrafo.setAttribute("class", "errorAsignatura");
    div.setAttribute("class", "apartadoAsignatura");
    label.setAttribute("class", "margenB-10");
    
    //Texto de los elementos
    label.innerHTML = "Nombre de la asignatura";
    
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(parrafo);
    
    formulario.insertBefore(div, añadirAsignatura);
    
    /*formulario.insertBefore(label, añadirAsignatura);
    formulario.insertBefore(input, añadirAsignatura);
    formulario.insertBefore(parrafo, añadirAsignatura);*/
});


