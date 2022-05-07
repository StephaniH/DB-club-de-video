<html>
    <head>
        <title>
            insertarR1.php
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
                    Insertar una renta
                </h1>
                <br>
                <form method ="post" Action="insertarR2.php">
                    <strong>
                        Datos de la nueva renta
                    </strong>
                    <br>
                    </b>
                    <br>
                    ID del titulo &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="int" name="idT">
                    <br>
                    <br>
                    ID de la copia &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="int" name="idC">
                    <br>
                    <br>
                    ID del miembro &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="int" name="idM">
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
                    <input type="submit" value="insertar">
                </center>
            </form>
        </div>
    </body>
</html>
