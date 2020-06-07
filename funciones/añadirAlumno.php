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
$expediente = $_POST["expediente"];


if(isset($_POST["movil"])){
    $movil = $_POST["movil"];
}else{
    $movil = null;
}

/*----------INSERCION ALUMNO----------*/
//Comprueba si existe el alumo en la base de datos
//$existe = existeAlumno($dni);
$existe = false;
    
if($existe){
    $http = "Location: ../formularios/formularioAlumno.php?";
    $http.= "error=".urldecode("El alumno a añadir ya existe");
        
    header($http);
}else{       
    //Selecciona el año actual
    $anyo = date("Y");
        
    //Añade el alumno a la base de datos
    insertarAlumno($dni, $nombre, $apellidos, $direccion, $correo, $telefono, $movil, $nombreUsuario, $contrasenya, $expediente);
    
    //Selecciona el id del alumno que se acaba de insertar
    $idAlumno = buscarIdAlumno($nombreUsuario);
    
    //Inserta las asignaturas seleccionadas del curso y clase del profesor
    foreach ($_POST["curso"] as $idCurso){
        foreach ($_POST["clase"] as $idClase){
            foreach($_POST["asignaturas"] as $idAsignatura){
                insertarAsignaturaAlumno($idAlumno, $idAsignatura, $idCurso, $idClase, $anyo);
            }
        }
    }    
    
    $http = "Location: ../formularios/formularioAlumno.php?";
    $http .= "mensaje=".urlencode("Alumno añadido correctamente");
    header($http);
    }
    