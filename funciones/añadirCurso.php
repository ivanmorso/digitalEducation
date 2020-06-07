<?php
/*----------ARCHIVOS EXTERNOS----------*/
include './funcionesInsercion.php';
include './funcionesComprobacion.php';

/*----------VARIABLES----------*/
$nombreCurso = $_POST["nombreCurso"];

/*----------CUERPO DEL PROGRAMA----------*/
if(!existeCurso($nombreCurso)){
    insertarCurso($nombreCurso);
    
    $http = "Location: ../formularios/formularioCurso.php?";
    $http .= "mensaje=".urlencode("Curso añadido correctamente");
}else{
    $http = "Location: ../formularios/formularioCurso.php";
}

header($http);