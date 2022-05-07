<html>
    <head>
        <title>
            borrarM1.php
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
                Borrar un miembro
            </h1>
            <br>

            <form method="post" Action = "borrarM2.php">
                <br>
                <?php
                    echo"ID de miembro &nbsp&nbsp";
                ?>

                <select name="idM">
                    <?php
                        $servername = "localhost";
                        $username = "";
                        $password = "";
                        $dbname = "TEST";
                        $enlace=mysqli_connect("localhost","root","" );//Conexion al DBMS
                        mysqli_select_db($enlace,"TEST");
                        $ssql="SELECT member_id FROM member ORDER BY member_id";
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
