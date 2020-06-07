<?php
//Iniciamos la sesion para utilizar las variables session
session_start();

/*----------ARCHIVOS EXTERNOS----------*/
include './funcionesInsercion.php';
include './funcionesBusqueda.php';
 
/*----------VARIABLES----------*/
$numeroFicherosSubidos = count($_FILES['ficheros']['name']);
$mensaje = "";

//Por cada fichero comprobamos si se pueden subir o el error que da
for($i = 0; $i < $numeroFicherosSubidos; $i++){
    switch ($_FILES['ficheros']['error'][$i]) {
        case UPLOAD_ERR_OK: //Valor: 0; No hay error, fichero subido con éxito.
            $directorioSubida = "../../../archivos/".$_FILES['ficheros']['name'][$i]; //Ruta del directorio donde quiero que se guarden los ficheros.

            //Si el fichero seleccionado no se ha subido, este se sube
            if(!file_exists($directorioSubida)){
                //Comprueba si el fichero($_FILES['ficheros']['tmp_name'][$i]) se ha subido por POST y si es válido, lo mueve un archivo subido a una nueva ubicación
                if (move_uploaded_file($_FILES['ficheros']['tmp_name'][$i], $directorioSubida)) { 
                    
                    $nombre = $_FILES['ficheros']['name'][$i];
                    $tipo = $_FILES['ficheros']['type'][$i];
                    
                    //Insertamos los ficheros con el nombre y tipo
                    insertarFicheros($nombre, $tipo);
                    
                    $idArchivo = buscarIdArchivo($nombre);
                    echo "idArchivo: " .$idArchivo."<br>";
                    echo "idCurso: " .$_SESSION["idCurso"]."<br>";
                    echo "idClase: " .$_SESSION["idClase"]."<br>";
                    echo "idAsignatura: " .$_SESSION["idAsignatura"]."<br>";
                    
                    insertarFicherosAsignatura($idArchivo, $_SESSION["idCurso"], $_SESSION["idClase"], $_SESSION["idAsignatura"]);
                    
                    $mensaje .= $_FILES['ficheros']['name'][$i]." subido con éxito.</br>"; //basename: quita barras. Devuelve el último componente de nombre de una ruta
                }else{
                    $mensaje.=basename($_FILES['ficheros']['name'][$i])." error desconocido.";
                }
            }
        break;
        
        case UPLOAD_ERR_NO_FILE:
            $mensaje.=basename("El fichero no existe.");
        break;
    
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            $mensaje .= basename($_FILES['ficheros']['name'][$i])." excede el límite. ";
        break;
    
        default:
            $mensaje .= basename($_FILES['ficheros']['name'][$i])." error desconocido. ";
        break;
        }
}

$http = "Location: ../contenidoAsignaturaProfesor.php?";
$http .= "mensaje=".urldecode($mensaje);
        
header($http);