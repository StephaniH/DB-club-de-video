<html>
    <head>
        <title>
            insertarRes1.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>
    <body>
        <div>
            <br><br>
            <center>
                <h1>
                    Insertar una reservación
                </h1>
                <br>
                <form method ="post" Action="insertarRes2.php">
                    <strong>
                        Datos de la nueva reservación
                    </strong>
                    <br>
                    </b>
                    <br>
                    Fecha de reservación &nbsp;&nbsp;&nbsp;&nbsp; 
                    <input type="date" name="fecha">
                    <br>
                    <br>
                    ID de miembro &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="int" name="idM">
                    <br>
                    <br>
                    ID de título &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="int" name="idT">
                    <br>
                    <br>
                    <input type="submit" value="insertar">
                </center>
            </form>
        </div>
    </body>
</html>
