<html>
    <head>
        <title>
            borrarRes2.php
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
            $idM = $_POST['idM'];
            $idT = $_POST ['idT'];
            $ssql="DELETE from reservation WHERE title_id=$idT and member_id=$idM";
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
                Reservación Eliminada
            </h1>
        </div>
        <br><br>
        <div align="center">
            <a href="Reservaciones.php">
                Visualizar la tabla Reservaciones.
            </a>
        </div>
    </body>
</html>
