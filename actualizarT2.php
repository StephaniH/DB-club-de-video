<html>
    <head>
        <title>
            actualizarT2.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>

    <body>
        <br><br>
        <div align = "center">
            <br><br>
            <h1>
                Actualizar un titulo
            </h1>
            <br>
        <?php
            $enlace = mysqli_connect('localhost','root','','test'); 
            $nomb = $_POST ['nombre'];
            $desc = $_POST ['descripcion'];
            $clasi = $_POST ['clasificacion'];
            $categ = $_POST ["category"];
            $fecha = $_POST ['fecha'];
            $num = $_POST ["id"];
            $ssql= "UPDATE title SET title='$nomb',description='$desc',rating='$clasi',category='$categ',release_date='$fecha' WHERE title_id='$num'";
            $resultado= mysqli_query($enlace,$ssql);

            if(!$resultado)
            {
                die("Informacion no actualizada: " . mysql_error());
            }
            
            mysqli_close($enlace);
        ?>
        <br><br>
        <h2>
            <div align ="center">
                Titulo Actualizado
            </div>
        </h2>
        <br><br>
        <a href="Titulos.php">
            <center>
                Visualizar el contenido de la tabla de titulos
            </center>
        </a>
    </body>
</html>
