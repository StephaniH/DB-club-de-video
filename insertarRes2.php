<html>
    <head>
        <title>
            insertarRes2.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>

    <body>
        <?php
            $nombreservidor = "localhost";
            $nombreusuario = "root";
            $password = "";
            $nombrebasedatos = "test";
            $enlace = mysqli_connect($nombreservidor, $nombreusuario, $password, $nombrebasedatos); 

            if(!$enlace)
            {
                die("Conexion fallida: " . mysql_error())."\n";
            }
            
            else
            {
                echo "Conexion exitosa<br>";
            }

            $idT = $_POST ['idT'];
            $idM = $_POST ['idM'];
            $fecha = $_POST ['fecha'];
            $ssql= "INSERT INTO reservation VALUES ('$fecha', $idM, $idT)";
            $resultado = mysqli_query($enlace, $ssql);

            if(!$resultado )
            {
                die("No fue posible insertar los datos."  );
            }
            
            mysqli_close($enlace);
        ?>
        <br><br>
        <h1>
            <Div align="center">
                Reservación Insertada
            </div>
        </h1>
        <br><br>
        <center>
            <a href="Reservaciones.php">
                Visualizar contenido de las reservaciones
            </a>

            <br>
            <br>
            
            <a href="pagina_principal.html">
                INICIO
            </a>
        </center>
    </body>
</html>
