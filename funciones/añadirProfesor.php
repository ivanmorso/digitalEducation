<?php
/*----------ARCHIVOS EXTERNOS----------*/
include './funcionesInsercion.php';
include './funcionesComprobacion.php';
include './funcionesBusqueda.php';

/*----------VARIABLES----------*/
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$dni = $_POST["dni"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$nombreUsuario = $_POST["nombreUsuario"];
$contrasenya = $_POST["contrasenya"];
$licencia = $_POST["licencia"];


if(isset($_POST["movil"])){
    $movil = $_POST["movil"];
}else{
    $movil = null;
}

/*----------INSERCION PROFESOR----------*/
//Comprueba si existe el profesor en la base de datos

if($existe){
    $http = "Location: formularioProfesor.php?";
    $http.= "mensaje=".urldecode("El profesor a añadir ya existe");
      
    header($http);
}else{
    //Añade el profesor a la base de datos
    insertarProfesor($dni, $nombre, $apellidos, $direccion, $correo, $telefono, $movil, $nombreUsuario, $contrasenya, $licencia);
       
    //Selecciona el id del profesor que se acaba de insertar
    $idProfesor = busquedaIdProfesor($nombreUsuario);
            
    //Inserta las asignaturas seleccionadas del curso y clase del profesor
    foreach ($_POST["curso"] as $idCurso){
        foreach ($_POST["clase"] as $idClase){
            foreach($_POST["asignaturas"] as $idAsignatura){
                insertarAsignaturasProfesor($idProfesor, $idAsignatura, $idCurso, $idClase);
            }
        }      
    }
    
    $http = "Location: ../formularios/formularioProfesor.php?";
    $http.= "mensaje=".urldecode("El profesor se ha añadido correctamente");
    
    header($http);
}
