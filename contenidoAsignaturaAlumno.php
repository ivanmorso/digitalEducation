<?php
    session_start();
    
    /*----------ARCHIVOS EXTERNOS----------*/
    include './funciones/funcionesBusqueda.php';
    $usuario = busquedaNombreAlumno($_SESSION["idAlumno"]);
    
    /*----------VARIABLES----------*/
    $mensaje = "";
    
    if(isset($_GET["idAsignatura"])){
        $_SESSION["idAsignatura"] = $_GET["idAsignatura"];
    }
    
    if(isset($_GET["mensaje"])){
        $mensaje = $_GET["mensaje"];
    }
    
    $nombreAsignatura = buscarNombreAsignatura($_SESSION["idAsignatura"]);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <!--CSS-->
        <link rel="stylesheet" href="./CSS/contenidoAsignaturaAlumno.css">

        <!--SCRIPTS-->
        <script src="./JS/contenidoAsignaturaProfesor.js" defer></script>
    </head>

    <body>
        <header>
            <div id="divLogo">
                <a href="./alumno.php"><img src="./imagenes/logo.png" id="logo"></a>
            </div>
            <div id="divTitulo">
                <img src="./imagenes/titulo.png" id="titulo">
            </div>
            <div id="divUsuario">
                <h1>Bienvenido <?=$usuario?></h1>
                <a href="./funciones/desconectar.php">Desconectar</a>
            </div>
       </header>

        <main id="main">              
            <h1>Archivos subidos de <?=$nombreAsignatura?></h1>
            <section id="ficheros">
                <?php           
                    buscarContenidoAsignatura($_SESSION["idAsignatura"], $_SESSION["idClase"], $_SESSION["idCurso"]);
                ?>
            </section>
        </main>

        <footer>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th colspan="5">HORARIO</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td rowspan="2">LUNES</td>
                            <td>10:00 - 14:00</td>
                            <td rowspan="2">JUEVES</td>
                            <td>10:00 - 14:00</td>
                        </tr>
                        <tr>
                            <td>16:00 - 20:00</td>
                            <td>16:00 - 20:00</td>
                        </tr>
                        <tr>
                            <td rowspan="2">MARTES</td>
                            <td>10:00 - 14:00</td>
                            <td rowspan="2">VIERNES</td>
                            <td>10:00 - 14:00</td>
                        </tr>
                        <tr>
                            <td>16:00 - 20:00</td>
                            <td>16:00 - 20:00</td>
                        </tr>
                        <tr>
                            <td rowspan="2">MIERCOLES</td>
                            <td>10:00 - 14:00</td>
                        </tr>
                        <tr>
                            <td>16:00 - 20:00</td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="5">Excepto fines de semana y festivos</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div>
                <h3>INFORMACION DE CONTACTO</h3>
                <p>TELEFONO: 975645894/975645893</p>
                <p>CORREO: digitalEducation@gmail.com</p>
            </div>
            <div>
                <div class="enlaces">
                    <a href="../condicionesUso.php" class="margenB-10">CONDICIONES DE USO</a>
                    <a href="../asvisoLegal.php">AVISO LEGAL</a>
                </div>
                <div>
                    <p>&COPY; 2020 DIGITAL CORPORATION</p>
                </div>
            </div>
        </footer>
    </body>
</html>
