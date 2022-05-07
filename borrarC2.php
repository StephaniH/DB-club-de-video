<html>
    <head>
        <title>
            borrarC2.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>
    
    <body>
        <?php
            $enlace = mysqli_connect("localhost","root","");//Conexion a BD
            mysqli_select_db($enlace, "TEST");

            $idC= $_POST['idC'];
            $idT = $_POST ['idT'];
            $ssql="DELETE from title_copy WHERE title_id=$idT and copy_id=$idC";
            $result = mysqli_query($enlace,$ssql);
            
            if(!$result )
            {
                die("Error: No se puede eliminar el registro; compromete la integridad referencial. " /*. mysql_error()*/);
            }

            mysqli_close($enlace);
        ?>
        <br><br>
        <h1>
            <div align="center">
                Copia Eliminada
            </h1>
        </div>
        <br><br>
        <div align="center">
            <a href="Copias.php">
                Visualizar la tabla Copias.
            </a>
        </div>
    </body>
</html>
