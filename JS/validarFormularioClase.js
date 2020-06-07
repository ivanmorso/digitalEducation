let enviar = document.getElementById("enviar");

enviar.addEventListener("click", validar);

function validar(){
    let nombreClase = document.getElementById("nombreClase");
    let errorClase = document.getElementById("errorClase");
    
    if(campoVacio(nombreClase, errorClase)){
        event.preventDefault();
    }else{
        //Enviamos el formulario en caso de que todo sea correcto
        document.getElementById("formularioClase").submit();
    }
}