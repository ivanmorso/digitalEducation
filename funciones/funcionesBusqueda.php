<?php
/*---------- ----------*/
//Busca el nombre del profesor por su id
function busquedaNombreProfesor($idProfesor){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreProfesor = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlnombreProfesor = "SELECT nombre
                          FROM profesores
                          WHERE id_profesor = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlnombreProfesor);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("i", $idProfesor);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($nombreProfesor);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $nombreProfesor;
}

//Busca el nombre del alumno por su id
function busquedaNombreAlumno($idAlumno){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreProfesor = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlNombreAlumno = "SELECT nombre
                        FROM alumnos
                        WHERE id_alumno = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlNombreAlumno);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("i", $idAlumno);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($nombreProfesor);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $nombreProfesor;
}

function busquedaNombreAdministrador($idAdministrador){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreAdministrador = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlNombreAdministrador = "SELECT nombre
                               FROM administradores
                               WHERE id_administrador = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlNombreAdministrador);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("i", $idAdministrador);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($nombreAdministrador);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $nombreAdministrador;
}

//NO SE SI LA VOY A UTILIZAR
//Busca el id de la asignatura por el nombre de la asignatura, devolviendo el id de la asignatura
function busquedaIdAsignatura($nombreAsignatura){
     /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $idAsignatura = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlIdAsignatura = "SELECT id_asignatura
                        FROM asignaturas
                        WHERE nombre_asignatura = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlIdAsignatura);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $nombreAsignatura);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idAsignatura);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $idAsignatura;
}

//Busca el id del alumno por su usuario
function buscarIdAlumno($usuario){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $idAlumno = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlIdAlumno = "SELECT id_alumno
                    FROM alumnos
                    WHERE nombre_usuario = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlIdAlumno);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $usuario);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idAlumno);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $idAlumno;
}

//Busca el id del profesor por el nombre de usuario
function buscarIdProfesor($usuario){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $idProfesor = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlId = "SELECT id_profesor
              FROM profesores
              WHERE nombre_usuario = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlId);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $usuario);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idProfesor);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $idProfesor;
}

//Busca el id del administrador por el nombre de usuario
function buscarIdAdministrador($usuario){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $idAdministrador = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlId = "SELECT id_administrador
              FROM administradores
              WHERE nombre_usuario = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlId);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $usuario);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idAdministrador);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $idAdministrador;
}

//Busca el nombre de las clases y los añade a un option value
function busquedaClases($multiple){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $id_clase = "";
    $nombreClase = "";

    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlNombreCurso = "SELECT *
                       FROM clases
                       ORDER BY nombre_clase ASC";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlNombreCurso);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($id_clase, $nombreClase);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    if($multiple){
        //Obtenemos los valores de la consulta
        echo "<label for='clase'>Seleccione una clase</label>";
        echo "<select name='clase[]' id='clase' class='clase' multiple>";
        while ($consulta ->fetch()){
            echo "<option value = '".$id_clase."' data-nombre = '".$nombreClase."'>".$nombreClase."</option>";
        }
        echo "</select>";
    }else{
        //Obtenemos los valores de la consulta
        echo "<label for='clase' class='margenR-10'>Seleccione una clase</label>";
        echo "<select name='clase' id='clase' class='clase'>";
        while ($consulta ->fetch()){
            echo "<option value = '".$id_clase."'>".$nombreClase."</option>";
        }
        echo "</select>";
    }
}

//Busca el nombre de los cursos y los añade a un option value para seleccionarlos
function busquedaNombreCursos($multiple){   
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreCurso = "";
    $idCurso = "";

    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlNombreCurso = "SELECT *
                       FROM cursos";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlNombreCurso);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idCurso, $nombreCurso);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    if($multiple){
        //Obtenemos los valores de la consulta
        echo "<label for='curso'>Seleccione un curso</label>";
        echo "<select name='curso[]' id='curso' class='curso' multiple>";
        while ($consulta ->fetch()){
            echo "<option value = '".$idCurso."' data-nombre= '".$nombreCurso."'>".$nombreCurso."</option>";
        }
        echo "</select>";
    }else{
        //Obtenemos los valores de la consulta
        echo "<label for='curso' class='margenR-10'>Seleccione un curso</label>";
        echo "<select name='curso' id='curso' class='curso'>";
        while ($consulta ->fetch()){
            echo "<option value = '".$idCurso."' data-nombre= '".$nombreCurso."'>".$nombreCurso."</option>";
        }
        echo "</select>";
    }
}

//Busca el nombre de las asignaturas por el id del curso, añadiendolos a un checkbox para mostrarlas
function busquedaNombreAsignaturas($idCurso, $idClase){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreAsignatura = "";
    $idAsignatura = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlAsignaturas = "SELECT a.*
                       FROM asignaturas a, asignaturas_curso ac
                       WHERE ac.id_curso = ? AND ac.id_clase = ? AND a.id_asignatura = ac.id_asignatura
                       ORDER BY a.nombre_asignatura ASC";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlAsignaturas);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("ii", $idCurso, $idClase);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idAsignatura, $nombreAsignatura);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    while ($consulta ->fetch()){
        echo "<div>";
        echo "<input type='checkbox' name='asignaturas[]' value='".$idAsignatura."'>";
        echo "<label>".$nombreAsignatura."</label>";
        echo "</div>";
    }
}

//Busca el nombre de un curso especifico mediante su id, devolviendo su nombre
function busquedaNombreCurso($idCurso){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreCurso = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlNombreCurso = "SELECT nombre_curso
                       FROM cursos
                       WHERE id_curso = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlNombreCurso);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("i", $idCurso);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($nombreCurso);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $nombreCurso;
}

//Busca el nombre de una clase especifica mediante su id, devolviendo su nombre
function busquedaNombreClase($idClase){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreClase = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlNombreClase = "SELECT nombre_clase
                       FROM clases
                       WHERE id_clase = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlNombreClase);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("i", $idClase);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($nombreClase);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $nombreClase;
}

//Busca el nombre de los cursos a los que pertenece un profesor por el dni
function buscarCursosProfesor($idProfesor){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreCurso = "";
    $nombreClase = "";
    $idCurso = "";
    $idClase = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlCursos = "SELECT crs.id_curso, nombre_curso, cls.id_clase, nombre_clase
                  FROM clases cls, cursos crs, asignaturas_profesores ap, profesores p
                  WHERE ap.id_clase = cls.id_clase AND ap.id_curso = crs.id_curso
                        AND p.id_profesor = ap.id_profesor AND ap.id_profesor = ?
                  GROUP BY nombre_curso, nombre_clase";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlCursos);

    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("i", $idProfesor);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idCurso, $nombreCurso, $idClase, $nombreClase);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    while ($consulta ->fetch()){
        echo "<form method = 'GET' action = 'asignaturasProfesor.php'>";
        echo "<h2>".$nombreCurso." ".$nombreClase."</h2>";
        echo "<img src='./imagenes/cursos/".$nombreCurso."_".$nombreClase.".png'>";
        echo "<input type = 'hidden' id = 'idCurso' name = 'idCurso' value = '".$idCurso."'>";
        echo "<input type = 'hidden' id = 'idClase' name = 'idClase' value = '".$idClase."'>";
        echo "</form>";
    }
}

//Busca el nombre de las asignaturas de un profesor por el dni y el id del curso, y crea un div con una imagen 
function buscarAsignaturasProfesor($idClase, $idCurso, $idProfesor){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreAsignatura = "";
    $idAsignatura = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlAsignaturas = "SELECT a.*
                       FROM asignaturas a, asignaturas_profesores ap, profesores p, clases cls
                       WHERE ap.id_profesor = p.id_profesor AND ap.id_asignatura = a.id_asignatura 
                            AND ap.id_clase = cls.id_clase AND ap.id_clase = ? AND ap.id_curso = ? 
                            AND ap.id_profesor = ?";
    
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlAsignaturas);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("iii", $idClase, $idCurso, $idProfesor);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idAsignatura, $nombreAsignatura);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    while ($consulta ->fetch()){
        echo "<form method = 'GET' action = 'contenidoAsignaturaProfesor.php'>";
        echo "<h2>".$nombreAsignatura."</h2>";
        echo "<img src='./imagenes/asignaturas/".$nombreAsignatura.".png'>";
        echo "<input type = 'hidden' id = 'idAsignatura' name = 'idAsignatura' value = '".$idAsignatura."'>";
        echo "</form>";
    }
}

//Busca el dni del profesor por el nombre de usuario
function buscarDniAlumno($usuario){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $dni = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");    
    
    //Sentencia SQL
    $sqlDni = "SELECT dni
               FROM alumnos
               WHERE nombre_usuario = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlDni);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    //Agregacion de las variables a la consulta
    $consulta ->bind_param("s", $usuario);
    
    //Ejegutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($dni);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    $consulta->close();
    
    return $dni;
}

//Busca el nombre de los cursos a los que pertenece un alumno por el dni
function buscarCursosAlumno($idAlumno){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreCurso = "";
    $idCurso = "";
    $idClase = "";
    $nombreClase = "";
            
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlCursos = "SELECT crs.id_curso, nombre_curso, cls.id_clase, nombre_clase
                  FROM clases cls, cursos crs, asignaturas_alumno aa, alumnos a
                  WHERE aa.id_clase = cls.id_clase AND aa.id_curso = crs.id_curso
                        AND a.id_alumno = aa.id_alumno AND aa.id_alumno = ?
                  GROUP BY nombre_curso, nombre_clase";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlCursos);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("s", $idAlumno);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idCurso, $nombreCurso, $idClase, $nombreClase);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    while ($consulta ->fetch()){
        echo "<form method = 'GET' action = 'asignaturasAlumno.php'>";
        echo "<h2>".$nombreCurso." ".$nombreClase."</h2>";
        echo "<img src='./imagenes/cursos/".$nombreCurso."_".$nombreClase.".png'>";
        echo "<input type = 'hidden' id = 'idCurso' name = 'idCurso' value = '".$idCurso."'>";
        echo "<input type = 'hidden' id = 'idClase' name = 'idClase' value = '".$idClase."'>";
        echo "</form>";
    }
}

//Busca el nombre de las asignaturas de un alumno por el dni y el id del curso, y crea un div con una imagen 
function buscarAsignaturasAlumno($idClase, $idCurso, $idAlumno){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreAsignatura = "";
    $idAsignatura = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlAsignaturas = "SELECT asig.*
                       FROM asignaturas asig, asignaturas_alumno aa, alumnos a, clases cls
                       WHERE aa.id_alumno = a.id_alumno AND aa.id_asignatura = asig.id_asignatura 
                           AND aa.id_clase = cls.id_clase AND aa.id_clase = ? AND aa.id_curso = ?  
                           AND aa.id_alumno = ?";
    
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlAsignaturas);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("iii", $idClase, $idCurso, $idAlumno);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idAsignatura, $nombreAsignatura);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    while ($consulta ->fetch()){
        echo "<form method = 'GET' action = 'contenidoAsignaturaAlumno.php'>";
        echo "<h2>".$nombreAsignatura."</h2>";
        echo "<img src='./imagenes/asignaturas/".$nombreAsignatura.".png'>";
        echo "<input type = 'hidden' id = 'idAsignatura' name = 'idAsignatura' value = '".$idAsignatura."'>";
        echo "</form>";
    }
}

//Busca el id del archivo por su nombre de archivo
function buscarIdArchivo($nombreArchivo){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $idArchivo = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlIdArchivo = "SELECT id_archivo
                     FROM archivos
                     WHERE nombre_archivo = ?";
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlIdArchivo);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("s", $nombreArchivo);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idArchivo);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    $consulta ->fetch();
    
    return $idArchivo;
}

//Busca el contenido de una asignatura de un curso de una clase
function buscarContenidoAsignatura($idAsignatura, $idClase, $idCurso){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $idArchivo = "";
    $nombreArchivo = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlContenidoAsignaturas = "SELECT aa.id_archivo, a.nombre_archivo
                                FROM archivos a, archivos_asignatura aa
                                WHERE a.id_archivo = aa.id_archivo AND id_curso = ? 
                                    AND id_clase = ? AND id_asignatura = ?; ";
    
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlContenidoAsignaturas);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("iii", $idCurso, $idClase, $idAsignatura);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($idArchivo, $nombreArchivo);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    //Obtenemos los valores de la consulta
    while ($consulta ->fetch()){
        //echo "<p id='".$idArchivo."'><a href = ./archivos/".$nombreArchivo." target =>.$nombreArchivo.</a></p>";
        echo "<div class = 'fichero'>";
        echo "<p>".$nombreArchivo."</p>";
        echo "<div class='imagenes'>";
        echo "<a href = ./archivos/".$nombreArchivo." target='_blank'><img src = './imagenes/otros/ver.png' class='verArchivo'></a>";
        echo "<a href = ./archivos/".$nombreArchivo." download><img src = './imagenes/otros/descargar.png'></a>";
        echo "</div>";
        echo "</div>";
    }
}

//Busca el nombre del archvo por su id
function buscarNombreArchivo($idArchivo){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreArchivo = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlNombreArchivo = "SELECT a.nombre
                        FROM archivos a, archivos_asignatura aa
                        WHERE a.id_archivo = aa.id_archivo AND aa.id_archivo = ?";
    
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlNombreArchivo);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("i", $idArchivo);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($nombreArchivo);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
   
    return $nombreArchivo;
}

//Busca el tipo de archivos por su id
function buscarTipoArchivo($idArchivo){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $tipoArchivo = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlTipoArchivo = "SELECT a.tipo
                       FROM archivos a, archivos_asignatura aa
                       WHERE a.id_archivo = aa.id_archivo AND aa.id_archivo = ?";
    
    
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlTipoArchivo);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("i", $idArchivo);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($tipoArchivo);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
   
    return $tipoArchivo;
}

//Busca el nombre de la asignatura por su id
function buscarNombreAsignatura($idAsignatura){
    /*----------ARCHIVOS EXTERNOS----------*/
    require_once '../../seguridad/DBPlataformaDigital.php';
    
    /*----------VARIABLES----------*/
    $nombreAsignatura = "";
    
    /*----------CONEXION BASE DE DATOS----------*/
    $canal = new mysqli(IP, USUARIO, PASSWD, DB);

    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ". $canal -> connect_errno ."<br>";
    }

    $canal ->set_charset("utf8");
    
    //Sentencia SQL
    $sqlNombreAsignatura = "SELECT nombre_asignatura
                            FROM asignaturas
                            WHERE id_asignatura = ?";
        
    //Preparamos la consulta
    $consulta = $canal ->prepare($sqlNombreAsignatura);
    
    //Comprobacion de la consulta
    if($canal -> connect_errno){
        echo "Ha ocurrido el error ".$canal -> connect_errno ." ".$canal ->connect_error ."<br>";
    }
    
    $consulta ->bind_param("i", $idAsignatura);
    
    //Ejecutamos la consulta
    $consulta ->execute();
    
    //Vinculamos las valriables de la consulta a una nueva
    $consulta ->bind_result($nombreAsignatura);
    
    //Guardamos los resultados de la consulta
    $consulta ->store_result();
    
    $consulta->fetch();
   
    return $nombreAsignatura;
}