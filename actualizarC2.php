<html>
    <head>
        <title>
            actualizarC2.php
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
                Actualizar una copia
            </h1>
            <br>
        <?php
            $enlace = mysqli_connect('localhost','root','','test'); 
            $idT = $_POST ['idT'];
            $idC = $_POST ["idC"];
            $status = $_POST ['status'];
            $ssql= "UPDATE title_copy SET status='$status' WHERE title_id='$idT' and copy_id='$idC'";
            $resultado= mysqli_query($enlace,$ssql);

            if(!$resultado)
            {
                die("Informacion no actualizada: " . mysql_error());
            }
            
            mysqli_close($enlace);
        ?>
        <h2>
            <div align ="center">
                Copia Actualizada
            </div>
        </h2>

        <a href="Copias.php">
            <center>
                Visualizar el contenido de la tabla de copias
            </center>
        </a>
    </body>
</html>
