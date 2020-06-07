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
            <h1>AVISO LEGAL</h1>
            <h2>Identificación y Titularidad</h2>
            <p>En cumplimiento del artículo 10 de la Ley 34 / 2002, de 11 de julio, de Servicios de la Sociedad de la Información y Comercio Electrónico, el Titular expone sus datos identificativos.</p>
            <ul>
                <li>Titular: DIGITAL CORPORATION</li>
                <li>CIF: P3232615I</li>
                <li>Domicilio:  Calle Sanz Oliveros, Numero 2, Bajo</li>
                <li>Correo electronico: digitalcorporation@gmail.com</li>
            </ul>

            <h2>Finalidad</h2>
            <p>La finalidad del sitio Web www.digitaleducation.com es de caracter educativo.</p>

            <h2>Condiciones de Uso</h2>
            <p>La utilización del sitio Web le otorga la condición de Usuario, e implica la aceptación completa de todas las cláusulas y condiciones de uso incluidas en las páginas:</p>
            <ul>
                <li>Aviso Legal</li>
                <li>Política de Privacidad</li>
                <li>Política de Cookies</li>
            </ul>
            <p>Si no estuviera conforme con todas y cada una de estas cláusulas y condiciones absténgase de utilizar este sitio Web.</p>
            <p>El acceso a este sitio Web no supone, en modo alguno, el inicio de una relación comercial con el Titular.</p>
            <p>A través de este sitio Web, el Titular le facilita el acceso y la utilización de diversos contenidos que el Titular o sus colaboradores han publicadon por medio de Internet.</p>
            <p>A tal efecto, usted está obligado y comprometido a NO utilizar cualquiera de los contenidos del sitio Web con fines o efectos ilícitos, prohibidos en este Aviso Legal o por la legislación vigente, 
                lesivos de los derechos e intereses de terceros, o que de cualquier forma puedan dañar, inutilizar, sobrecargar, deteriorar o impedir la normal utilización de los contenidos, los equipos informáticos 
                o los documentos, archivos y toda clase de contenidos almacenados en cualquier equipo informático propios o contratados por el Titular, de otros usuarios o de cualquier usuario de Internet.</p>

            <h2>Medidas de seguridad</h2>
            <p>Los datos personales que facilite al Titular pueden ser almacenados en bases de datos automatizadas o no, cuya titularidad corresponde en exclusiva a el Titular, que asume todas las medidas de índole 
                técnica, organizativa y de seguridad que garantizan la confidencialidad, integridad y calidad de la información contenida en las mismas de acuerdo con lo establecido en la normativa vigente en protección 
                de datos.</p>
            <p>No obstante, debe ser consciente de que las medidas de seguridad de los sistemas informáticos en Internet no son enteramente fiables y que, por tanto el Titular no puede garantizar la inexistencia de virus 
                u otros elementos que puedan producir alteraciones en los sistemas informáticos (software y hardware) del Usuario o en sus documentos electrónicos y ficheros contenidos en los mismos aunque el Titular pone 
                todos los medios necesarios y toma las medidas de seguridad oportunas para evitar la presencia de estos elementos dañinos.</p>

            <h2>Datos personales</h2>
            <p>Usted puede consultar toda la información relativa al tratamiento de datos personales que recoge el Titular en la página de la Política de Privacidad.</p>

            <h2>Contenidos</h2>
            <p>El Titular ha obtenido la información, el contenido multimedia y los materiales incluidos en el sitio Web de fuentes que considera fiables, pero, si bien ha tomado todas las medidas razonables para asegurar 
                que la información contenida es correcta, el Titular no garantiza que sea exacta, completa o actualizada. El Titular declina expresamente cualquier responsabilidad por error u omisión en la información 
                contenida en las páginas de este sitio Web.</p>
            <p>Queda prohibido transmitir o enviar a través del sitio Web cualquier contenido ilegal o ilícito, virus informáticos, o mensajes que, en general, afecten o violen derechos de el Titular o de terceros.</p>
            <p>Los contenidos del Sitio Web tienen únicamente una finalidad informativa y bajo ninguna circunstancia deben usarse ni considerarse como oferta de venta, solicitud de una oferta de compra ni recomendación 
                para realizar cualquier otra operación, salvo que así se indique expresamente.</p>
            <p>El Titular se reserva el derecho a modificar, suspender, cancelar o restringir el contenido del Sitio Web, los vínculos o la información obtenida a través del sitio Web, sin necesidad de previo aviso.</p>
            <p>El Titular no es responsable de los daños y perjuicios que pudieran derivarse de la utilización de la información del sitio Web o de la contenida en las redes sociales del Titular.</p>

            <h2>Política de cookies</h2>
            <p>En la página Política de Cookies puede consultar toda la información relativa a la política de recogida y tratamiento de las cookies.</p>
            <p>El Titular sólo obtiene y conserva la siguiente información acerca de los visitantes del Sitio Web:</p>
            <ul>
                <li>El nombre de dominio del proveedor (PSI) y/o dirección IP que les da acceso a la red.</li>
                <li>La fecha y hora de acceso al sitio Web.</li>
                <li>La dirección de Internet origen del enlace que dirige al sitio Web.</li>
                <li>El número de visitantes diarios de cada sección.</li>
                <li>La información obtenida es totalmente anónima, y en ningún caso puede ser asociada a un Usuario concreto e identificado.</li>
            </ul>

            <h2>Enlaces a otros sitios Web</h2>
            <p>El Titular puede proporcionarle acceso a sitios Web de terceros mediante enlaces con la finalidad exclusiva de informar sobre la existencia de otras fuentes de información en Internet en las que podrá ampliar
                los datos ofrecidos en el sitio Web.</p>
            <p>Estos enlaces a otros sitios Web no suponen en ningún caso una sugerencia o recomendación para que usted visite las páginas web de destino, que están fuera del control del Titular, por lo que Titular no es 
                responsable del contenido de los sitios web vinculados ni del resultado que obtenga al seguir los enlaces.</p>
            <p>Estos enlaces a otros sitios Web no suponen en ningún caso una sugerencia o recomendación para que visites las páginas web de destino, que están fuera del control del Titular, por lo que Titular no es 
                responsable del contenido de los sitios web vinculados ni del resultado que obtengas al seguir los enlaces.</p>
            <p>Asimismo, el Titular no responde de los links o enlaces ubicados en los sitios web vinculados a los que le proporciona acceso.</p>
            <p>El establecimiento del enlace no implica en ningún caso la existencia de relaciones entre Titular y el propietario del sitio en el que se establezca el enlace, ni la aceptación o aprobación por parte del 
                Titular de sus contenidos o servicios.</p>
            <p>Si accede a un sitio Web externo desde un enlace que encuentre en el Sitio Web usted deberá leer la propia política de privacidad del otro sitio web que puede ser diferente de la de este sitio Web.</p>

            <h2>Propiedad intelectual e industrial</h2>
            <p>Todos los derechos están reservados.</p>
            <p>Todo acceso a este sitio Web está sujeto a las siguientes condiciones: la reproducción, almacenaje permanente y la difusión de los contenidos o cualquier otro uso que tenga finalidad pública o comercial 
                queda expresamente prohibida sin el consentimiento previo expreso y por escrito de Titular.</p>

            <h2>Limitación de responsabilidad</h2>
            <p>La información y servicios incluidos o disponibles a través de este sitio Web pueden incluir incorrecciones o errores tipográficos. De forma periódica el Titular incorpora mejoras y/o cambios a la 
                información contenida y/o los Servicios que puede introducir en cualquier momento.</p>
            <p>El Titular no declara ni garantiza que los servicios o contenidos sean interrumpidos o que estén libres de errores, que los defectos sean corregidos, o que el servicio o el servidor que lo pone a 
                disposición estén libres de virus u otros componentes nocivos sin perjuicio de que el Titular realiza todos los esfuerzos en evitar este tipo de incidentes.</p>
            <p>Titular declina cualquier responsabilidad en caso de que existan interrupciones o un mal funcionamiento de los Servicios o contenidos ofrecidos en Internet, cualquiera que sea su causa. Asimismo, el 
                Titular no se hace responsable por caídas de la red, pérdidas de negocio a consecuencia de dichas caídas, suspensiones temporales de fluido eléctrico o cualquier otro tipo de daño indirecto que te pueda 
                ser causado por causas ajenas a el Titular.</p>
            <p>Antes de tomar decisiones y/o acciones con base a la información incluida en el sitio Web, el Titular le recomienda comprobar y contrastar la información recibida con otras fuentes.</p>

            <h2>Jurisdicción</h2>
            <p>Este Aviso Legal se rige íntegramente por la legislación española.</p>
            <p>Siempre que no haya una norma que obligue a otra cosa, para cuantas cuestiones se susciten sobre la interpretación, aplicación y cumplimiento de este Aviso Legal, así como de las reclamaciones que puedan 
                derivarse de su uso, las partes acuerdan someterse a los Jueces y Tribunales de la provincia de Soria, con renuncia expresa de cualquier otra jurisdicción que pudiera corresponderles.</p>

            <h2>Contacto</h2>
            <p>En caso de que usted tenga cualquier duda acerca de estas Condiciones legales o quiera realizar cualquier comentario sobre este sitio Web, puede enviar un mensaje de correo electrónico a la dirección 
                avisoLegal@gmail.com.</p>
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
