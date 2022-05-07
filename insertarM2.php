<html>
    <head>
        <title>
            insertarM2.php
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

            $num = $_POST ['numero'];
            $nomb = $_POST ['nombre'];
            $apel = $_POST ['apel'];
            $dir = $_POST ['dir'];
            $city = $_POST ['city'];
            $tele = $_POST ["tele"];
            $ins = $_POST ['ins'];
            $ssql= "INSERT INTO member VALUES ($num,'$apel','$nomb','$dir','$city','$tele','$ins')";
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
                Miembro Insertado
            </div>
        </h1>
        <br><br>
        <center>
            <a href="Miembros.php">
                Visualizar contenido de los miembros
            </a>

            <br>
            <br>
            
            <a href="pagina_principal.html">
                INICIO
            </a>
        </center>
    </body>
</html>
