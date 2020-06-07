<?php
/*----------FUNCIONES----------*/
function insertarCurso($nombreCurso){
/*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarCurso = "INSERT INTO cursos (nombre_curso) VALUES (?)";
    
    //Prearamos la consulta
    $consulta = $canal -> prepare($sqlInsertarCurso);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta -> bind_param("s", $nombreCurso);
    
    //Ejecucion de la sentencia
    $consulta ->execute();
    
    $consulta->close();    
}

function insertarClase($nombreClase){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarClase = "INSERT INTO clases (nombre_clase) VALUES (?)";
    
    //Prearamos la consulta
    $consulta = $canal -> prepare($sqlInsertarClase);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta -> bind_param("s", $nombreClase);
    
    //Ejecucion de la sentencia
    $consulta ->execute();
    
    $consulta->close();    
}

function insertarAlumno($dni, $nombre, $apellidos, $direccion, $correo, $telefono, $movil, $nombreUsuario, $contrasenya, $expediente){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarAlumno = "INSERT INTO alumnos (dni, nombre, apellidos, direccion, correo, telefono, movil, nombre_usuario, contrasenya, num_expediente)
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    //Prearamos la consulta
    $consulta = $canal -> prepare($sqlInsertarAlumno);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta -> bind_param("sssssiissi", $dni, $nombre, $apellidos, $direccion, $correo, $telefono, $movil, $nombreUsuario, $contrasenya, $expediente);
    
    //Ejecucion de la sentencia
    $consulta ->execute();
    
    $consulta->close();
}

function insertarProfesor($dni, $nombre, $apellidos, $direccion, $correo, $telefono, $movil, $nombreUsuario, $contrasenya, $licencia){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarProfesor = "INSERT INTO profesores (dni, nombre, apellidos, direccion, correo, telefono, movil, nombre_usuario, contrasenya, num_licencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    //Prearamos la consulta
    $consulta = $canal ->prepare($sqlInsertarProfesor);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("sssssiissi", $dni, $nombre, $apellidos, $direccion, $correo, $telefono, $movil, $nombreUsuario, $contrasenya, $licencia);
    
    //Ejecucion de la sentencia
    $consulta ->execute();
}

//Insertamos el nombre de las asignaturas por su nombre
function insertarAsignatura($nombreAsignatura){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarProfesor = "INSERT INTO asignaturas (nombre_asignatura) VALUES (?)";
    
    //Prearamos la consulta
    $consulta = $canal ->prepare($sqlInsertarProfesor);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $nombreAsignatura);
    
    //Ejecucion de la sentencia
    $consulta ->execute();
}

function insertarAsignaturasCurso($idCurso, $idClase, $idAsignatura){
   /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarAsignaturasCurso = "INSERT INTO asignaturas_curso VALUES (?, ?, ?)";
    
    //Prearamos la consulta
    $consulta = $canal ->prepare($sqlInsertarAsignaturasCurso);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("iii", $idAsignatura, $idCurso, $idClase);
    
    //Ejecucion de la sentencia
    $consulta ->execute(); 
    
}

function insertarAsignaturaAlumno($idAlumno, $idAsignatura, $idCurso, $idClase, $anyo){
    echo $idAlumno."<br>", $idAsignatura ."<br>", $idCurso."<br>", $idClase."<br>", $anyo."<br>";
          
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    //$canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarAsignatura = "INSERT INTO asignaturas_alumno VALUES (?, ?, ?, ?, ?)";
    
    //Preparamos la consulta
    $consulta = $canal->prepare($sqlInsertarAsignatura);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("iiiii", $idAlumno, $idAsignatura, $idCurso, $idClase, $anyo);
    
    //Ejecucion de la sentencia
    $consulta ->execute();
}

function insertarAsignaturasProfesor($idProfesor, $idAsignatura, $idCurso, $idClase){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarAsignatura = "INSERT INTO asignaturas_profesores VALUES (?, ?, ?, ?)";
    
    //Preparamos la consulta
    $consulta = $canal->prepare($sqlInsertarAsignatura);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("iiii", $idProfesor, $idAsignatura, $idCurso, $idClase);
    
    //Ejecucion de la sentencia
    $consulta ->execute();
}

function insertarFicheros($nombreFichero, $tipoFichero){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarFichero = "INSERT INTO archivos (nombre_archivo, tipo_archivo) VALUES (?, ?)";
    
    //Preparamos la consulta
    $consulta = $canal->prepare($sqlInsertarFichero);
    
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("ss", $nombreFichero, $tipoFichero);
    
    //Ejecucion de la sentencia
    $consulta ->execute();
}

function insertarFicherosAsignatura($idArchivo, $idCurso, $idClase, $idAsignatura){
   /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlInsertarFicheroAsignatura = "INSERT INTO archivos_asignatura VALUES (?, ?, ?, ?)";
    
    //Preparamos la consulta
    $consulta = $canal->prepare($sqlInsertarFicheroAsignatura);
    
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("iiii", $idArchivo, $idCurso, $idClase, $idAsignatura);
    
    //Ejecucion de la sentencia
    $consulta ->execute(); 
}
