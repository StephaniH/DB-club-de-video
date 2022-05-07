<html>
    <head>
        <title>
            actualizarC1.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>

    <body>
        <br><br>
        <div align = "center"><h1>Actualizar una copia</h1><br><br>
            <form method="post" Action="actualizarC2.php">
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ID del título &nbsp;&nbsp&nbsp;&nbsp;"
                ?>
                <select name="idT">
                    <?php
                        $enlace = mysqli_connect ('localhost','root','','test'); 
                        $ssql="SELECT title_id FROM title_copy ORDER BY title_id";
                        $resultado=mysqli_query($enlace, $ssql);

                        while ($renglon=mysqli_fetch_array($resultado, MYSQLI_NUM))
                        {
                            echo "<option>".$renglon[0]."</option>";
                        }
                    ?>
                </select>
                <br>
                <br>
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ID de la copia &nbsp;&nbsp&nbsp;&nbsp;"
                ?>
                <select name="idC">
                    <?php
                        $enlace = mysqli_connect ('localhost','root','','test'); 
                        $ssql="SELECT copy_id FROM title_copy ORDER BY copy_id";
                        $resultado=mysqli_query($enlace, $ssql);

                        while ($renglon=mysqli_fetch_array($resultado,MYSQLI_NUM))
                        {
                            echo "<option>".$renglon[0]."</option>";
                        }
                    ?>
                </select>
                <br>
                <br>
                Estado &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="status">
                <br>
                <br>
                <Input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
