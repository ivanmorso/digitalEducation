let dni = document.getElementById("dni");
let nombre = document.getElementById("nombre");
let apellidos = document.getElementById("apellidos");
let direccion = document.getElementById("direccion");
let correo = document.getElementById("correo");
let telefono = document.getElementById("telefono");
let movil = document.getElementById("movil");
let expediente = document.getElementById("expediente");
let nombreUsuario = document.getElementById("nombreUsuario");
let contrasenya = document.getElementById("contrasenya");
let enviar = document.getElementById("enviar");

enviar.addEventListener("click", validarFormulario);

//Valida todo el formulario
function validarFormulario(){
    if(validarDni() & validarNombre() & validarApellidos() & validarDireccion() 
            & validarCorreo() & validarTelefono() & validarMovil() & validarExpediente() 
            & validarNombreUsuario() & validarContrasenya()){
        document.getElementById("formularioAlumno").submit();
    }else{
        event.preventDefault();
    }
}

function validarContrasenya(){
    let errorContrasenya = document.getElementById("errorContrasenya");
    
    if(!campoVacio(contrasenya, errorContrasenya)){
        return true;
    }else{
        return false;
    };
}

function validarNombreUsuario(){
    let errorNombreUsuario = document.getElementById("errorNombreUsuario");
    
    if(!campoVacio(nombreUsuario, errorNombreUsuario)){
        return true;
    }else{
        return false;
    };
}

function validarExpediente(){
    let errorExpediente = document.getElementById("errorExpediente");
    
    if(!campoVacio(expediente, errorExpediente)){
        let expresion = /^\d{6}$/;
        let mensaje = "El expediente ha de tener 6 dígitos";
        
        return comprobarExpresion(expediente, errorExpediente, expresion, mensaje);
    }
}

function validarMovil(){
    if(document.getElementById("movil").value !== ""){
        let errorMovil = document.getElementById("errorMovil");
        let expresion = /^\d{9}$/;
        let mensaje = "El formato ha de ser xxxxxxxxx";

        return comprobarExpresion(telefono, errorMovil, expresion, mensaje);
    }else{
        return true;
    }
}
function validarTelefono(){
    let errorTelefono = document.getElementById("errorTelefono");
    
    if(!campoVacio(telefono, errorTelefono)){
        let expresion = /^\d{9}$/;
        let mensaje = "El formato ha de ser xxxxxxxxx";
        
        return comprobarExpresion(telefono, errorTelefono, expresion, mensaje);
    }
}

function validarDireccion(){
    let errorDireccion = document.getElementById("errorDireccion");
    
    if(!campoVacio(direccion, errorDireccion)){
        let expresion = /^([A-z]+|[ ])+[,][ ]([A-z]+)[ ][0-9]{1,2}[,][ ]([0-9]{1,2}[º]|[A-z]+)[ ][A-Z]$/;
        let mensaje = "El formato ha de ser: calle, numero x, piso letra";
        
        return comprobarExpresion(direccion, errorDireccion, expresion, mensaje);
    }
}

function validarCorreo(){
    let errorCorreo = document.getElementById("errorCorreo");
    
    if(!campoVacio(correo, errorCorreo)){
        let expresion = /^(\w|\d)+[@]([a-z]+|-)+[.][[a-z]+$/;
        let mensaje = "El formato ha de ser example@example.com";
        
        return comprobarExpresion(correo, errorCorreo, expresion, mensaje);
    }
}

function validarApellidos(){
    let errorApellidos = document.getElementById("errorApellidos");
    
    //Comprueba si el campo está vacío o en caso contrario, si coincide con la expresion regular indicada
    if(!campoVacio(apellidos, errorApellidos)){
        let expresion = /^([A-Z][a-z|á|é|í|ó|ú]+|[ |,|º]|[0-9]|[A-Z])+$/;
        let mensaje = "El formato ha de ser 'Sanchez'";
        
        return comprobarExpresion(apellidos, errorApellidos, expresion, mensaje);
    }
}

function validarNombre(){
    let errorNombre = document.getElementById("errorNombre");
    
    //Comprueba si el campo está vacío o en caso contrario, si coincide con la expresion regular indicada
    if(!campoVacio(nombre, errorNombre)){
        let expresion = /^[A-Z][a-z|á|é|í|ó|ú]+$/;
        let mensaje = "El formato ha de ser 'Pepe'";
        return comprobarExpresion(nombre, errorNombre, expresion, mensaje);
    };
}

function validarDni(){
    let errorDni = document.getElementById("errorDni");
    
    //Comprueba si el campo está vacío o en caso contrario, si coincide con la expresion regular indicada
    if(!campoVacio(dni, errorDni)){
        let expresion = /^[0-9]{8}[A-Z]$|^[X|Y|Z][0-9]{7}[A-Z]$/;
        let mensaje = "El formato ha de ser 12345678W ó X1234567";
        return comprobarExpresion(dni, errorDni, expresion, mensaje);
    }
}



