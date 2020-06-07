<?php
    include './funcionesComprobacion.php';
    include './funcionesInsercion.php';
    include './funcionesBusqueda.php';
    /*
     * 1- Añadimos las asignaturas a la tabla correspondiente en caso de que no existan
     * 2- Buscamos el id del cusro seleccionado
     * 3- Insertamos las asignaturas al curso
     */
    $idCurso = $_POST["curso"];
    $idClase = $_POST["clase"];
    $asignaturas = $_POST["asignaturas"];
    
        
    foreach ($asignaturas as $asignatura){
        //Para cada asignatura si no existe en la base de datos, la añade
        if(!existeAsignatura($asignatura)){
            insertarAsignatura($asignatura);
        }
        
        //Buscamos el id de la/s asignatura/s introducida/s
        $idAsignatura = busquedaIdAsignatura($asignatura);
        
        insertarAsignaturasCurso($idCurso, $idClase, $idAsignatura);
    }
    
    $http = "Location: ../formularios/formularioAsignaturas.php?";
    $http .= "mensaje=".urlencode("Asignatura/s añadida/s correctamente");
    header($http);