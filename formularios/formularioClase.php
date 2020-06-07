<?php
    
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
    <title>Formulario Clase</title>
    
    <!--FAVICON-->
    <link rel="icon" href="../imagenes/logo.png" type="image/gif" sizes="16x16">
    
    <!--CSS-->
    <link rel="stylesheet" href="../CSS/formularioClase.css">
    
    <!--SCRIPTS-->
    <script src="../JS/validarFormularioClase.js" defer></script>
    <script src="../JS/funcionesGenericas.js" defer></script>
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
        <h1>Añadir nueva clase</h1>
        <p style="visibility: <?=$visibilidad?>; color: <?=$color?>" id="mensaje"><?=$mensaje?></p>
        <form method="post" action="../funciones/añadirClase.php" id="formularioClase">
            <div id="clase">
                <label for="nombreClse">Nombre de la clase</label>
                <input type="text" name="nombreClase" id="nombreClase">
                <p id="errorClase"></p>
            </div>
            
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