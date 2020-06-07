let nombreCurso = document.getElementsByName("nombreCurso");
let enviar = document.getElementById("enviar");

enviar.addEventListener("click", validar);

function validar(){   
    if(nombreCurso[0].value === ""){
        //Evitamos que el formulario se envie
        event.preventDefault();
        
        //Asignamos la clase error al input del nombre del curso
        nombreCurso[0].className = "error";
        
        //Asignamos un texto con un mensaje de error al error
        document.getElementById("errorNombre").innerHTML = "El nombre no puede estar vacío";
        
        //Ponemos el texto en rojo de dicho error
        document.getElementById("errorNombre").className = "textoError";
        
        //Mostramos el mensaje
        document.getElementById("errorNombre").classList.add("verError");
        
    }else{
        //Enviamos el formulario en caso de que todo sea correcto
        document.getElementById("formularioCurso").submit();
    }
}