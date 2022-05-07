<html>
    <head>
        <title>
            insertarM1.php
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
                    Insertar un miembro
                </h1>
                <br>
                <form method ="post" Action="insertarM2.php">
                    <strong>
                        Datos del nuevo miembro
                    </strong>
                    <br>
                    </b>
                    <br>
                    ID &nbsp;&nbsp;&nbsp;&nbsp; 
                    <input type="int" name="numero">
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
                    <input type="Text" name="dir">
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
                    <input type="submit" value="insertar">
                </center>
            </form>
        </div>
    </body>
</html>
