<html>
    <head>
        <title>
            borrarR2.php
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
            // $numero= $_POST['numero'];
            $num = $_POST ['idM'];
            $ssql="DELETE from rental WHERE member_id=$num";
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
                Renta Eliminada
            </h1>
        </div>
        <br><br>
        <div align="center">
            <a href="Rentas.php">
                Visualizar la tabla Rentas.
            </a>
        </div>
    </body>
</html>
