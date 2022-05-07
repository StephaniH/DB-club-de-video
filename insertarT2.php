<html>
    <head>
        <title>
            insertarT2.php
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
            $desc = $_POST ['descripcion'];
            $clasi = $_POST ['clasificacion'];
            $categ = $_POST ["category"];
            $fecha = $_POST ['fecha'];
            $ssql= "INSERT INTO title VALUES ($num,'$nomb','$desc','$clasi','$categ','$fecha')";
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
                Titulo Insertado
            </div>
        </h1>
        <br><br>
        <center>
            <a href="Titulos.php">
                Visualizar contenido de los titulos
            </a>
            <a href="pagina_principal.html">
                INICIO
            </a>
        </center>
    </body>
</html>
