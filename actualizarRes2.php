<html>
    <head>
        <title>
            actualizarRes2.php
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
                Actualizar una reservación
            </h1>
            <br>
        <?php
            $enlace = mysqli_connect('localhost','root','','test'); 
            $idM = $_POST ['idM'];
            $idT = $_POST ["idT"];
            $fecha = $_POST ['fecha'];
            $ssql= "UPDATE reservation SET res_date='$fecha' WHERE title_id='$idT' and member_id='$idM'";
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
                Reservación Actualizada
            </div>
        </h2>
        <br><br>
        <a href="Reservaciones.php">
            <center>
                Visualizar el contenido de la tabla de reservaciones
            </center>
        </a>
    </body>
</html>
