<html>
    <head>
        <title>Rentas.php</title>
        <br><br>
        <center><img src="logo_bd.jpg"></center>
    </head>
    <body>
        <br><br>
        <h1><div align="center">Lectura de la tabla rentas</div></h1>
        <br>
        <?php 
            $enlace = mysqli_connect ('localhost','root','','test'); //conexion a mysql
            if(!$enlace){
            //Conexion con la base de datos
                die("Conexión fallida: " . mysql_error());
            }
            $ssql = "SELECT * FROM rental";
            $resultado = mysqli_query($enlace, $ssql);
        ?>
        <br>
        <table align="center" border=1>
        <tr>
            <th>ID de titulo</th>
            <th>ID de la copia</th>
            <th>ID de miembro</th>
            <th>Fecha de registro</th>
            <th>Fecha de devolucion real</th>
            <th>Fecha de devolucion esperada</th>
            
        </tr>
        <?php 
            //Mostrar los registros
            while($renglon=mysqli_fetch_array($resultado, MYSQLI_BOTH))
            {
            echo "<tr><td>".$renglon[0]."</td>"."<td>".$renglon[1]."</td>"."<td>".$renglon[2]."</td>"."<td>".$renglon[3]."</td>"."<td>".$renglon[4]."</td>"."<td>".$renglon[5]."</td></tr>";
            }
            mysqli_free_result($resultado);
            echo "</table>";
        ?>
        <div align="center">
            <br><br>
            <a href="insertarR1.php">Añadir un nueva renta</a><br>
            <a href="actualizarR1.php">Actualizar una renta</a><br>
            <a href="borrarR1.php">Borrar una renta</a></br>
            <a href="pagina_principal.html">Inicio</a>
        </div>
    </body>
</html>
