<?php
    /*----------ARCHIVOS EXTERNOS----------*/
    include '../funciones/funcionesBusqueda.php';
    
    session_start();
    
    /*----------VARIABLES----------*/
    $mensaje = "";
    $visibilidad = "collapse";
    if(isset($_GET["mensaje"])){
        $mensaje = $_GET["mensaje"];
        $visibilidad = "visible";
        $color = "green";
    }
    
    if(isset($_GET["error"])){
        $mensaje = $_GET["error"];
        $visibilidad = "visible";
        $color = "red";
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formulario Alumno</title>

    <!--FAVICON-->
    <link rel="icon" href="../imagenes/logo.png" type="image/gif" sizes="16x16">
    
    <!--CSS-->
    <link rel="stylesheet" href="../CSS/formularioAlumno.css">
    
    <!--SCRIPTS-->
    <script src="../JS/validarFormularioAlumno.js" defer></script>
    <script src="../JS/funcionesGenericas.js" defer></script>
    <script src="../JS/Ajax/verasignaturasCurso.js" defer></script>
</head>

<body>
    <header>
        <div id="divLogo">
            <a href="../administrador.php"><img src="../imagenes/logo.png" id="logo"></a>
        </div>
        <div id="divTitulo">
            <img src="../imagenes/titulo.png" id="titulo">
        </div>
        <div id="divUsuario">
                <h1>Bienvenido <?=$_SESSION["usuario"]?></h1>
               <a href="../funciones/desconectar.php">Desconectar</a>
        </div>
    </header>
    
    <main>
        <h1>Añadir alumno</h1>
        <p style="visibility: <?=$visibilidad?>; color: <?=$color?>" id="mensaje"><?=$mensaje?></p>
        
        <form method="post" action="../funciones/añadirAlumno.php" id="formularioAlumno">
            <div class="apartado">               
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" maxlength="20" id="nombre">
                    <p id="errorNombre"></p>
                </div>

                <div>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" maxlength="50" id="apellidos">
                    <p id="errorApellidos"></p>
                </div>
                
                <div>
                    <label for="dni">DNI/NIE</label>
                    <input type="text" name="dni" id="dni" maxlength="9">
                    <p id="errorDni"></p>
                </div>
                
                <div>
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion">
                    <p id="errorDireccion"></p>
                </div>
            </div>
            
            <div class="apartado">
                <div>
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo">
                    <p id="errorCorreo"></p>
                </div>
                <div>
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" maxlength="9">
                    <p id="errorTelefono"></p>
                </div>
                <div>
                    <label for="movil">Móvil</label>
                    <input type="text" name="movil" id="movil" maxlength="9">
                    <p id="errorMovil"></p>
                </div>
                <div>
                    <label for="expediente">Numero de expediente</label>
                    <input type="text" name="expediente" id="expediente" maxlength="6">
                    <p id="errorExpediente"></p>
                </div>
            </div>
            
            <div class="apartado">
                <div>
                    <label for="nombreUsuario">Nombre de usuario</label>
                    <input type="text" name="nombreUsuario" id="nombreUsuario">
                    <p id="errorNombreUsuario"></p>
                </div>
                <div>
                    <label for="contraseña">Contraseña</label>
                    <input type="text" name="contrasenya" id="contrasenya">
                    <p id="errorContrasenya"></p>
                </div>
                <div>
                <?php
                    //Busca el nombre de los cursos indicando que pueden ser mas de 1 (true)
                    busquedaNombreCursos(true);
                ?>
                </div>
                
                <div>
                <?php
                    busquedaClases(true);
                ?>
                </div>
            </div>
            
            <h2>Asignaturas</h2>
            <div id="asignaturas"></div>
            
            <div id="botones">
                <button id="enviar" class="boton">Añadir</button>
                <input type="reset" value="Resetear formulario" id="resetForm" class="boton">
                <button id="cancelar"><a href="../administrador.php">Cancelar</a></button>
            </div>
        </form>
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