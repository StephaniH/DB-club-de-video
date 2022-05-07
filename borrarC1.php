<html>
    <head>
        <title>
            borrarC1.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>

    <body>
        <br><br>
        <div align="center">
            <h1>
                Borrar una copia
            </h1>
            <br>

            <form method="post" Action = "borrarC2.php">
                <br>
                <?php
                    echo"ID del título &nbsp&nbsp";
                ?>

                <select name="idT">
                    <?php
                        $servername = "localhost";
                        $username = "";
                        $password = "";
                        $dbname = "TEST";
                        $enlace=mysqli_connect("localhost","root","" );//Conexion al DBMS
                        mysqli_select_db($enlace,"TEST");
                        $ssql="SELECT title_id FROM title_copy ORDER BY title_id";
                        $resultado=mysqli_query($enlace,$ssql); 

                        while($renglon=mysqli_fetch_array($resultado,MYSQLI_NUM))
                        {
                            echo"<option>".$renglon[0]."</option>";
                        }

                        mysqli_free_result($resultado);
                    ?>
                </select> &nbsp;&nbsp;&nbsp;
                
                <br>
                <?php
                    echo"ID de la copia &nbsp&nbsp";
                ?>

                <select name="idC">
                    <?php
                        $servername = "localhost";
                        $username = "";
                        $password = "";
                        $dbname = "TEST";
                        $enlace=mysqli_connect("localhost","root","" );//Conexion al DBMS
                        mysqli_select_db($enlace,"TEST");
                        $ssql="SELECT copy_id FROM title_copy ORDER BY copy_id";
                        $resultado=mysqli_query($enlace,$ssql); 

                        while($renglon=mysqli_fetch_array($resultado,MYSQLI_NUM))
                        {
                            echo"<option>".$renglon[0]."</option>";
                        }

                        mysqli_free_result($resultado);
                    ?>
                </select> &nbsp;&nbsp;&nbsp;
                
                <input type="submit" value="Eliminar">
            </form>
        </div>
    </body>
</html>
