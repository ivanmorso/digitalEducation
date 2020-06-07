<?php
    include './funcionesBusqueda.php';
    $idCurso = $_POST["idCurso"];
    $idClase = $_POST["idClase"];

    busquedaNombreAsignaturas($idCurso, $idClase);