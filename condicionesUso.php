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
        <link rel="stylesheet" href="./CSS/avisoCondiciones.css">    
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
            <h1>CONDICIONES DE USO</h1>
            <h2>Introducción</h2>
            <p>
                Las presentes condiciones generales de uso de la página web, regulan los términos y condiciones de acceso y uso de www.digitaleducation.com, propiedad de DIGITAL CORPORATION, 
                con domicilio en Calle Sanz Oliveros, Numero 2, Bajo  y con Código de Identificación Fiscal número P3232615I, en adelante, «DIGITAL CORPORATION», que el usuario del Portal 
                deberá de leer y aceptar para usar todos los servicios e información que se facilitan desde el portal. El mero acceso y/o utilización del portal, de todos o parte de sus contenidos 
                y/o servicios significa la plena aceptación de las presentes condiciones generales de uso. 
            </p>
            
            <h2>Condiciones de uso</h2>
            <p>
                Las presentes condiciones generales de uso del portal regulan el acceso y la utilización del portal, incluyendo los contenidos y los servicios puestos a disposición de los usuarios 
                en y/o a través del portal, bien por el portal, bien por sus usuarios, bien por terceros. No obstante, el acceso y la utilización de ciertos contenidos y/o servicios puede encontrarse 
                sometido a determinadas condiciones específicas.
            </p>
            
            <h2>Modificaciones</h2>
            <p>
                La empresa se reserva la facultad de modificar en cualquier momento las condiciones generales de uso del portal. En todo caso, se recomienda que consulte periódicamente los presentes 
                términos de uso del portal, ya que pueden ser modificados.
            </p>
            
            <h2>Obligaciones del Usuario</h2>
            <p>
                El usuario deberá respetar en todo momento los términos y condiciones establecidos en las presentes condiciones generales de uso del portal. De forma expresa el usuario manifiesta que 
                utilizará el portal de forma diligente y asumiendo cualquier responsabilidad que pudiera derivarse del incumplimiento de las normas.
                
                Así mismo, el usuario no podrá utilizar el portal para transmitir, almacenar, divulgar promover o distribuir datos o contenidos que sean portadores de virus o cualquier otro código informático, 
                archivos o programas diseñados para interrumpir, destruir o perjudicar el funcionamiento de cualquier programa o equipo informático o de telecomunicaciones.
            </p>
            
            <h2>Responsabilidad del portal</h2>
            <p>
                El usuario conoce y acepta que el portal no otorga ninguna garantía de cualquier naturaleza, ya sea expresa o implícita, sobre los datos, contenidos, información y servicios que se incorporan 
                y ofrecen desde el Portal.

                Exceptuando los casos que la Ley imponga expresamente lo contrario, y exclusivamente con la medida y extensión en que lo imponga, el Portal no garantiza ni asume responsabilidad alguna respecto 
                a los posibles daños y perjuicios causados por el uso y utilización de la información, datos y servicios del Portal.

                En todo caso, el Portal excluye cualquier responsabilidad por los daños y perjuicios que puedan deberse a la información y/o servicios prestados o suministrados por terceros diferentes de la Empresa. 
                Toda responsabilidad será del tercero ya sea proveedor o colaborador.
            </p>
            
            <h2>Propiedad intelectual e industrial</h2>
            <p>Todos los contenidos, marcas, logos, dibujos, documentación, programas informáticos o cualquier otro elemento susceptible de protección por la legislación de propiedad intelectual o industrial, 
                que sean accesibles en el portal corresponden exclusivamente a la empresa o a sus legítimos titulares y quedan expresamente reservados todos los derechos sobre los mismos. Queda expresamente 
                prohibida la creación de enlaces de hipertexto (links) a cualquier elemento integrante de las páginas web del Portal sin la autorización de la empresa, siempre que no sean a una página web del 
                Portal que no requiera identificación o autenticación para su acceso, o el mismo esté restringido.

                En cualquier caso, el portal se reserva todos los derechos sobre los contenidos, información datos y servicios que ostente sobre los mismos. El portal no concede ninguna licencia o autorización 
                de uso al usuario sobre sus contenidos, datos o servicios, distinta de la que expresamente se detalle en las presentes condiciones generales de uso del portal.
            </p>
            
            <h2>Legislación aplicable, jurisdicción competente y notificaciones</h2>
            <p>
                Las presentes condiciones se rigen y se interpretan de acuerdo con las Leyes de España. Para cualquier reclamación serán competentes los juzgados y tribunales de (indicar la ciudad). 
                Todas las notificaciones, requerimientos, peticiones y otras comunicaciones que el Usuario desee efectuar a la Empresa titular del Portal deberán realizarse por escrito y se entenderá que han sido 
                correctamente realizadas cuando hayan sido recibidas en la siguiente dirección (indicar dirección de correo en la que se desean recibir las notificaciones).
            </p>
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
                <div class="apartado">
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
