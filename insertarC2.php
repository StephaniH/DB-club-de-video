<html>
    <head>
        <title>
            insertarC2.php
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
            $idC = $_POST ['idC'];
            $status = $_POST ['status'];
            $ssql= "INSERT INTO title_copy VALUES ($idT, $idC, '$status')";
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
                Copia Insertada
            </div>
        </h1>
        <br><br>
        <center>
            <a href="Copias.php">
                Visualizar contenido de las copias
            </a>

            <br>
            <br>
            
            <a href="pagina_principal.html">
                INICIO
            </a>
        </center>
    </body>
</html>
