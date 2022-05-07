<html>
    <head>
        <title>
            actualizarT1.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>

    <body>
        <br><br>
        <div align = "center"><h1>Actualizar un titulo</h1><br><br>
            <form method="post" Action="actualizarT2.php">
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ID del titulo &nbsp;&nbsp&nbsp;&nbsp;"; 
                ?>

                <select name="id">
                    <?php
                        $enlace = mysqli_connect ('localhost','root','','test'); 
                        $ssql="SELECT title_id FROM title ORDER BY title_id";
                        $resultado=mysqli_query($enlace, $ssql);

                        while ($renglon=mysqli_fetch_array($resultado,MYSQLI_NUM))
                        {
                            echo "<option>".$renglon[0]."</option>";
                        }
                    ?>
                </select>
                <br>
                <br>
                Nombre &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Text" name="nombre">
                <br>
                <br>
                Descripcion &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Text" name="descripcion">
                <br>
                <br>
                Clasificacion &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Text" name="clasificacion">
                <br>
                <br>
                Categoria &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Text" name="category">
                <br>
                <br>
                Fecha de lanzamiento &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="fecha">
                <br>
                <br>
                <Input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
