<html>
    <head>
        <title>Copias.php</title>
        <br><br>
        <center><img src="logo_bd.jpg"></center>
    </head>
    <body>
        <br><br>
        <h1><div align="center">Lectura de la tabla Copias de Títulos</div></h1>
        <br>
        <?php 
            $enlace = mysqli_connect ('localhost','root','','test'); //conexion a mysql
            if(!$enlace){
            //Conexion con la base de datos
                die("Conexión fallida: " . mysql_error());
            }
            $ssql = "SELECT * FROM title_copy";
            $resultado = mysqli_query($enlace, $ssql);
        ?>
        <br>
        <table align="center" border=1>
        <tr>
            <th>ID de título</th>
            <th>ID de la copia</th>
            <th>Estado</th>
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
            <a href="insertarC1.php">Añadir un nueva copia de título</a><br>
            <a href="actualizarC1.php">Actualizar una copia de título</a><br>
            <a href="borrarC1.php">Borrar una copia</a></br>
            <a href="pagina_principal.html">Inicio</a>
        </div>
    </body>
</html>
