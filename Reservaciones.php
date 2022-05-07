<html>
    <head>
        <title>Reservaciones.php</title>
        <br><br>
        <center><img src="logo_bd.jpg"></center>
    </head>
    <body>
        <br><br>
        <h1><div align="center">Lectura de la tabla reservación</div></h1>
        <br>
        <?php 
            $enlace = mysqli_connect ('localhost','root','','test'); //conexion a mysql
            if(!$enlace){
            //Conexion con la base de datos
                die("Conexión fallida: " . mysql_error());
            }
            $ssql = "SELECT * FROM reservation";
            $resultado = mysqli_query($enlace, $ssql);
        ?>
        <br>
        <table align="center" border=1>
        <tr>
            <th>Fecha de reservación</th>
            <th>ID de miembro</th>
            <th>ID de título</th>
        </tr>
        <?php 
            //Mostrar los registros
            while($renglon=mysqli_fetch_array($resultado, MYSQLI_BOTH))
            {
            echo "<tr><td>".$renglon[0]."</td>"."<td>".$renglon[1]."</td>"."<td>".$renglon[2]."</td></tr>";
            }
            mysqli_free_result($resultado);
            echo "</table>";
        ?>
        <div align="center">
            <br><br>
            <a href="insertarRes1.php">Añadir un nueva reservacion</a><br>
            <a href="actualizarRes1.php">Actualizar una reservacion</a><br>
            <a href="borrarRes1.php">Borrar una reservacion</a></br>
            <a href="pagina_principal.html">Inicio</a>
        </div>
    </body>
</html>
