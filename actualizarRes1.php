<html>
    <head>
        <title>
            actualizarRes1.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>

    <body>
        <br><br>
        <div align = "center"><h1>Actualizar una reservación</h1><br><br>
            <form method="post" Action="actualizarRes2.php">
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ID de miembro &nbsp;&nbsp&nbsp;&nbsp;"
                ?>
                <select name="idM">
                    <?php
                        $enlace = mysqli_connect ('localhost','root','','test'); 
                        $ssql="SELECT member_id FROM reservation ORDER BY member_id";
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
                    ID de título &nbsp;&nbsp&nbsp;&nbsp;"
                ?>
                <select name="idT">
                    <?php
                        $enlace = mysqli_connect ('localhost','root','','test'); 
                        $ssql="SELECT title_id FROM reservation ORDER BY title_id";
                        $resultado=mysqli_query($enlace, $ssql);

                        while ($renglon=mysqli_fetch_array($resultado,MYSQLI_NUM))
                        {
                            echo "<option>".$renglon[0]."</option>";
                        }
                    ?>
                </select>
                <br>
                <br>
                Fecha de reservación &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="fecha">
                <br>
                <br>
                <Input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
