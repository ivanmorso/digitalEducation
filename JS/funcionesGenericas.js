//Comprueba si el campo introducido tiene un valor vacío y lo incluye en el campoError
function campoVacio(campo, campoError){
    if(campo.value === ""){
    //Ponemos la clase error para poner el borde en rojo
        campo.classList.add("error");
        
        //Le introducimos un texto al parrafo de error
        campoError.innerHTML = "El campo no puede estar vacío";
        
        //Asignamos la clase textoError para poner en rojo el texto
        campoError.classList.add("textoError");
                       
        return true;
    }else{
        return false;
    }
}

/*Comprueba si el contenido del campo coincide con la expresion regular indicada, en caso de que no
muestra un mensaje de error*/
function comprobarExpresion(campo, campoError, expresion, mensaje){
    if(!expresion.test(campo.value)){
        //Ponemos la clase error para poner el borde en rojo
        campo.className = "error";
        
        //Le introducimos un texto al parrafo de error
        campoError.innerHTML = mensaje;
        
        //Asignamos la clase textoError para poner en rojo el texto
        campoError.className = "textoError";
        
        //Quitamos la clase ocultarError para visualizarlo
        campoError.classList.remove("ocultarError");
        
        return false;
    }else{
        //Quitamos la clase del campo
        campo.className = "";
        
        //Quitamos el mensaje de error
        campoError.innerHTML = "";
        
        //Quitamos la clase ocultarError para visualizarlo
        campoError.classList.remove("textoError");
        
        return true;
    }
}

