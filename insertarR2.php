<html>
    <head>
        <title>
            insertarR2.php
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

            $fecha = $_POST ['fecha'];
            $idM = $_POST ['idM'];
            $idC = $_POST ['idC'];
            $fechaR = $_POST ['fechaR'];
            $fechaE = $_POST ["fechaE"];
            $idT = $_POST ['idT'];
            $ssql= "INSERT INTO rental VALUES ('$fecha', $idM, $idC, '$fechaR', '$fechaE', $idT)";
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
                Renta Insertada
            </div>
        </h1>
        <br><br>
        <center>
            <a href="Rentas.php">
                Visualizar contenido de las rentas
            </a>

            <br>
            <br>
            
            <a href="pagina_principal.html">
                INICIO
            </a>
        </center>
    </body>
</html>
