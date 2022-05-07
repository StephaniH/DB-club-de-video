<html>
    <head>
        <title>
            actualizarR2.php
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
                Actualizar una renta
            </h1>
            <br>
        <?php
            $enlace = mysqli_connect('localhost','root','','test'); 
            $fecha = $_POST ['fecha'];
            $idM = $_POST ['idM'];
            $idC = $_POST ['idC'];
            $fechaR = $_POST ['fechaR'];
            $fechaE = $_POST ["fechaE"];
            $idT = $_POST ['idT'];
            $ssql= "UPDATE rental SET book_date='$fecha', copy_id=$idC, act_ret_date='$fechaR', exp_ret_date='$fechaE', title_id=$idT WHERE member_id='$idM'";
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
                Renta Actualizada
            </div>
        </h2>
        <br><br>
        <a href="Rentas.php">
            <center>
                Visualizar el contenido de la tabla de rentas
            </center>
        </a>
    </body>
</html>
