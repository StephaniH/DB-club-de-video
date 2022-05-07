<html>
    <head>
        <title>
            actualizarR1.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>

    <body>
        <br><br>
        <div align = "center"><h1>Actualizar una renta</h1><br><br>
            <form method="post" Action="actualizarR2.php">
                <?php
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    ID de miembro &nbsp;&nbsp&nbsp;&nbsp;"; 
                ?>

                <select name="idM">
                    <?php
                        $enlace = mysqli_connect ('localhost','root','','test'); 
                        $ssql="SELECT member_id FROM rental ORDER BY member_id";
                        $resultado=mysqli_query($enlace, $ssql);

                        while ($renglon=mysqli_fetch_array($resultado,MYSQLI_NUM))
                        {
                            echo "<option>".$renglon[0]."</option>";
                        }
                    ?>
                </select>
                <br>
                <br>
                ID de titulo &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="int" name="idT">
                <br>
                <br>
                ID de la copia &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="int" name="idC">
                <br>
                <br>
                Fecha de registro &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="fecha">
                <br>
                <br>
                Fecha de devolucion real &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="fechaR">
                <br>
                <br>
                Fecha de devolucion esperada &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="date" name="fechaE">
                <br>
                <br>
                <Input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>
