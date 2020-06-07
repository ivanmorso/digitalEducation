<?php
function existeClase($nombreClase){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlExisteClase = "SELECT *
                       FROM clases
                       WHERE nombre_clase = ?";
    
    //Preparamos la sentencia
    $consulta = $canal ->prepare($sqlExisteClase);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $nombreClase);
    
    //Ejecutamos la consulta
    $consulta ->execute();

    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

function existeCurso($nombreCurso){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlExisteCurso = "SELECT *
                       FROM cursos
                       WHERE nombre_curso = ?";
    
    //Preparamos la sentencia
    $consulta = $canal ->prepare($sqlExisteCurso);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $nombreCurso);
    
    //Ejecutamos la consulta
    $consulta ->execute();

    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

function existeProfesor($dni){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlExisteProfesor = "SELECT *
                          FROM profesores
                          WHERE dni = ?";
    
    //Preparamos la sentencia
    $consulta = $canal ->prepare($sqlExisteProfesor);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $dni);
    
    //Ejecutamos la consulta
    $consulta ->execute();

    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

function existeAlumno($dni){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlExisteProfesor = "SELECT *
                          FROM alumnos
                          WHERE dni = ?";
    
    //Preparamos la sentencia
    $consulta = $canal ->prepare($sqlExisteProfesor);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $dni);
    
    //Ejecutamos la consulta
    $consulta ->execute();

    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

function existeAsignatura($nombreAsignatura){
    require_once '../../../seguridad/DBPlataformaDigital.php';
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlComprobarProfesor = "SELECT *
                             FROM asignaturas
                             WHERE nombre_asignatura = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlComprobarProfesor);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $nombreAsignatura);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

function existeUsuarioAdministrador($usuario, $contrasenya){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlComprobarProfesor = "SELECT *
                             FROM administradores
                             WHERE nombre_usuario = ? AND contrasenya = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlComprobarProfesor);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("ss", $usuario, $contrasenya);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

function existeUsuarioProfesor($usuario, $contrasenya){
    require_once '../../../seguridad/DBPlataformaDigital.php';
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlComprobarProfesor = "SELECT *
                             FROM profesores
                             WHERE nombre_usuario = ? AND contrasenya = ?
                                AND NOT nombre_usuario = 'admin'";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlComprobarProfesor);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("ss", $usuario, $contrasenya);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

function existeUsuarioAlumno($usuario, $contrasenya){
    require_once '../../../seguridad/DBPlataformaDigital.php';
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlComprobarProfesor = "SELECT *
                             FROM alumnos
                             WHERE nombre_usuario = ? AND contrasenya = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlComprobarProfesor);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("ss", $usuario, $contrasenya);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

function comprobarAsignaturasCurso($idCurso, $idAsignatura){
    require_once '../../seguridad/DBPlataformaDigital.php';
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlComprobarAsignaturasCurso = "SELECT *
                                     FROM asignaturas_curso
                                     WHERE id_asignatura = ? AND id_curso = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlComprobarAsignaturasCurso);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("ii", $idAsignatura, $idCurso);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

//Comprueba si el valor introducido es un curso
function esCurso($nombreCurso){
    require_once '../../seguridad/DBPlataformaDigital.php';
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlEsCurso = "SELECT *
                   FROM cursos
                   WHERE nombre_curso = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlEsCurso);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $nombreCurso);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}

//Comprueba si el valor introducido es una asignatura
function esAsignatura($nombreAsignatura){
    require_once '../../seguridad/DBPlataformaDigital.php';
    /*----------VARIABLES----------*/
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlEsAsignatura = "SELECT *
                        FROM cursos
                        WHERE nombre_curso = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlEsAsignatura);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $nombreAsignatura);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Guardamos el numero de lineas que coinciden
    $resultados = $consulta ->num_rows;
    
    if($resultados == 0){
        return false;
    }else {
        return true;
    }
}