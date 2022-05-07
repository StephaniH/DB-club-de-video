<html>
    <head>
        <title>Titulos.php</title>
        <br><br>
        <center><img src="logo_bd.jpg"></center>
    </head>
    <body>
        <br><br>
        <h1><div align="center">Lectura de la tabla Títulos</div></h1>
        <br>
        <?php 
            $enlace = mysqli_connect ('localhost','root','','test'); //conexion a mysql
            if(!$enlace){
            //Conexion con la base de datos
                die("Conexión fallida: " . mysql_error());
            }
            $ssql = "SELECT * FROM title";
            $resultado = mysqli_query($enlace, $ssql);
        ?>
        <br>
        <table align="center" border=1>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Clasificacion</th>
            <th>Categoria</th>
            <th>Fecha de lanzamiento</th>
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
            <a href="insertarT1.php">Añadir un nuevo titulo</a><br>
            <a href="actualizarT1.php">Actualizar un titulo </a><br>
            <a href="borrarT1.php">Borrar un titulo</a></br>
            <a href="pagina_principal.html">Inicio</a>
        </div>
    </body>
</html>
