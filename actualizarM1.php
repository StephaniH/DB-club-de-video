<html>
    <head>
        <title>
            actualizarM1.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>

    <body>
        <br><br>
        <div align = "center"><h1>Actualizar un titulo</h1><br><br>
            <form method="post" Action="actualizarM2.php">
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ID de miembro &nbsp;&nbsp&nbsp;&nbsp;"; 
                ?>

                <select name="idM">
                    <?php
                        $enlace = mysqli_connect ('localhost','root','','test'); 
                        $ssql="SELECT member_id FROM member ORDER BY member_id";
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
                Apellido &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Text" name="apel">
                <br>
                <br>
                Direccion &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Text" name="Dir">
                <br>
                <br>
                Ciudad &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Text" name="city">
                <br>
                <br>
                Telefono &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Text" name="tele">
                <br>
                <br>
                Fecha de inscripcion &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="ins">
                <br>
                <br>
                <Input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
