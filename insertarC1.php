<html>
    <head>
        <title>
            insertarC1.php
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
                    Insertar una copia
                </h1>
                <br>
                <form method ="post" Action="insertarC2.php">
                    <strong>
                        Datos de la nueva copia
                    </strong>
                    <br>
                    </b>
                    <br>
                    ID del título &nbsp;&nbsp;&nbsp;&nbsp; 
                    <input type="int" name="idT">
                    <br>
                    <br>
                    ID de la copia &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="int" name="idC">
                    <br>
                    <br>
                    Estado &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="Text" name="status">
                    <br>
                    <br>
                    <input type="submit" value="insertar">
                </center>
            </form>
        </div>
    </body>
</html>
