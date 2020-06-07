<?php
    session_start();
    
    /*----------ARCHIVOS EXTERNOS----------*/
    include './funciones/funcionesBusqueda.php';
    
    
    /*----------VARIABLES----------*/
    $mensaje = "";
    
    if(isset($_GET["mensaje"])){
        $mensaje = $_GET["mensaje"];
    }
    
    $_SESSION["usuario"] = busquedaNombreAdministrador($_SESSION["idAdministrador"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
        
        <!--FAVICON-->
        <link rel="icon" href="./imagenes/logo.png" type="image/gif" sizes="16x16">
        
        <!--CSS-->
        <link rel="stylesheet" href="./CSS//administrador.css">        
        <!--SCRIPTS-->
        
    </head>
    <body>
        <header>
            <div id="divLogo">
                <a href="./administrador.php"><img src="./imagenes/logo.png" id="logo"></a>
            </div>
            <div id="divTitulo">
                <img src="./imagenes/titulo.png" id="titulo">
            </div>
            <div id="divUsuario">
                    <h1>Bienvenido <?=$_SESSION["usuario"]?></h1>
                    <a href="./funciones/desconectar.php">Desconectar</a>
            </div>
        </header>
        
        <main id="main">
            <div class="apartado">
                <h1>Añadir</h1>
                <form method="GET" action="./formularios/formularioProfesor.php">
                    <button>Añadir profesor</button>
                </form>
                <form method="GET" action="./formularios/formularioAlumno.php">
                    <button>Añadir alumno</button>
                </form>
                <form method="GET" action="./formularios/formularioCurso.php">
                    <button>Añadir curso</button>
                </form>
                <form method="GET" action="./formularios/formularioAsignaturas.php">
                    <button>Añadir asignaturas</button>
                </form>
                <form method="GET" action="./formularios/formularioClase.php">
                    <button>Añadir clase</button>
                </form>
            </div>
            
            <div class="apartado">
                <h1>Borrar</h1>
                <form method="GET" action="">
                    <button>Borrar profesor</button>
                </form>
                <form method="GET" action="">
                    <button>Borrar alumno</button>
                </form>
                <form method="GET" action="">
                    <button>Borrar curso</button>
                </form>
                <form method="GET" action="">
                    <button>Borrar asignaturas</button>
                </form>
                <form method="GET" action="">
                    <button>Borrar clase</button>
                </form>
            </div>
            
            <div class="apartado">
                <h1>Mostrar informacion</h1>
                <form method="GET" action="">
                    <button>Informacion profesores</button>
                </form>
                <form method="GET" action="">
                    <button>Informacion alumnos</button>
                </form>
                <form method="GET" action="">
                    <button>Informacion cursos</button>
                </form>
                <form method="GET" action="">
                    <button>Informacion asignaturas</button>
                </form>
                <form method="GET" action="">
                    <button>Informacion clases</button>
                </form>
            </div>
            
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
                    <a href="./condicionesUso.php" class="margenB-10">CONDICIONES DE USO</a>
                    <a href="./asvisoLegal.php">AVISO LEGAL</a>
                </div>
                <div>
                    <p>&COPY; 2020 DIGITAL CORPORATION</p>
                </div>
            </div>
        </footer>
    </body>
</html>
