
<html>
    <head>
        <title>Autenticaci&oacute;n con DNIe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>


    <body>
        <div id='banner'>
            
            <h2>Pr&aacute;ctica 3. Implementación de un servicio b&aacute;sico de autenticaci&oacute;n con DNIe</h2>
            <h3>Autenticación con datos públicos del DNIe</h3>

        </div>
        <div id='main'>
            <div id="formleft">
            <h3>Usuarios registrados</h3>
            <ul>
                <?php
                $link = mysqli_connect('localhost:3306', 'root') or die('No se puede conectar con el servidor');
                if (!$link) {
                    die('Could not connect to MySQL: ' . mysql_error());
                }

                mysqli_select_db($link, 'dniauth' ) or die('No se puede conectar con la base de datos');

                $sql = "SELECT * FROM users";
                $resultado = mysqli_query($link,$sql);
                while ($row = mysqli_fetch_assoc($resultado)) {

                    echo "<li>" . $row["user"] . " " . $row["dni"] . "</li>";
                }
                ?>
            </ul>
            </div>
            <div id="formright">
                <h3>Autenticar con GET</h3>
                <table>
                    <form action="autentica.php" method="get">
                        <tr><td><label for="user">Usuario:</label></td><td><input type="text" name="user"/></td>
                        <tr><td><label for="dni">DNI:</label></td><td><input type="text" name="dni"/></td>
                        <tr><td><label for="clave">Clave:</label></td><td><input type="text" name="password"/></td>
                        <tr><td><input type="submit" value="Enviar"/></td>
                    </form>
                </table>
            </div>
            <div id="formright">
                <h3>Autenticar con POST</h3>
                <table>
                    <form action="autentica.php" method="post">
                        <tr><td><label for="user">Usuario:</label></td><td><input type="text" name="user"/></td>
                        <tr><td><label for="dni">DNI:</label></td><td><input type="text" name="dni"/></td>
                        <tr><td><label for="clave">Clave:</label></td><td><input type="text" name="password"/></td>
                        <tr><td><input type="submit" value="Enviar"/></td>
                    </form>
                </table>
            </div>
        </div>

        <div id="foot">
            <h2>Aplicaciones Telemáticas para la Administración</h2>
            <p>Grado en Ingenier&iacute;a Telem&aacute;tica y Grado en Ingenier&iacute;a de Tecnolog&iacute;as de Telecomunicaci&oacute;n</p>
            <p>DEPARTAMENTO DE INGENIERÍA DE TELECOMUNICACIÓN</p>


        </div>
    </body>
</html>