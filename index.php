<?php
    /*----------VARIABLES----------*/
    $mensaje = "";
    $visibilidad = "collapse";
    if(isset($_GET["mensaje"])){
        $mensaje = $_GET["mensaje"];
        $visibilidad = "visible";
    }else{
        $visibilidad = "collapse";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        
        <!--FAVICON-->
        <link rel="icon" href="./imagenes/logo.png" type="image/gif" sizes="16x16">
        
        <!--CSS-->
        <link rel="stylesheet" href="./CSS/index.css">
        
    </head>
    <body>
        <header>
            <img src="./imagenes/logoTexto.png">
        </header>
        <main>
            <div id="container">
                <h1>Inicio de sesión</h1>
                <div>
                    <p style="visibility: <?=$visibilidad?>" id="mensaje"><?=$mensaje?></p>

                    <form method="post" action="./funciones/comprobarLogin.php">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario">
                        <label for="contrasenya">Contraseña</label>
                        <input type="password" name="contrasenya">

                        <input type="submit" value="Acceder" id="acceder">
                    </form>
                </div>
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
