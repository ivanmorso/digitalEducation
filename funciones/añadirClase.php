<?php
/*----------ARCHIVOS EXTERNOS----------*/
include './funcionesInsercion.php';
include './funcionesComprobacion.php';

/*----------VARIABLES----------*/
$nombreClase = $_POST["nombreClase"];


/*----------CUERPO DEL PROGRAMA----------*/
if(!existeClase($nombreClase)){
    insertarClase($nombreClase);
    
    $http = "Location: ../formularios/formularioClase.php?";
    $http .= "mensaje=".urlencode("Clase añadida correctamente");
   
}else{
    $http = "Location: ../formularios/formularioClase.php?";
    $http .= "error=".urlencode("La clase ya existe");
}

header($http);
    


