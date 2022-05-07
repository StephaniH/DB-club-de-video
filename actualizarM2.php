<html>
    <head>
        <title>
            actualizarM2.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>

    <body>
        <div align = "center">
            <br><br>
            <h1>
                Actualizar un titulo
            </h1>
            <br>
        <?php
            $enlace = mysqli_connect('localhost','root','','test'); 
            $nomb = $_POST ['nombre'];
            $apel = $_POST ['apel'];
            $dir = $_POST ['Dir'];
            $city = $_POST ["city"];
            $tele = $_POST ['tele'];
            $ins = $_POST ["ins"];
            $num = $_POST ['idM'];
            $ssql= "UPDATE member SET last_name='$apel',first_name='$nomb',address='$dir',city='$city',phone='$tele', join_date='$ins' WHERE member_id='$num'";
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
                Miembro Actualizado
            </div>
        </h2>
        <br><br>
        <a href="Miembros.php">
            <center>
                Visualizar el contenido de la tabla de miembros
            </center>
        </a>
    </body>
</html>
