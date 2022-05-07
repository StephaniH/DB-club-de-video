<html>
    <head>
        <title>
            insertarT1.php
        </title>
        <br><br>
        <center>
            <img src="logo_bd.jpg">
        </center>
    </head>
    <body>
        <div>
            <center>
                <br><br>
                <h1>
                    Insertar un titulo
                </h1>
                <br>
                <form method ="post" Action="insertarT2.php">
                    <strong>
                        Datos del nuevo titulo
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
                    Descripcion &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="Text" name="descripcion">
                    <br>
                    <br>
                    Clasificacion &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="Text" name="clasificacion">
                    <br>
                    <br>
                    Categoria &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="Text" name="category">
                    <br>
                    <br>
                    Fecha de lanzamiento &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" name="fecha">
                    <br>
                    <br>
                    <input type="submit" value="insertar">
                </center>
            </form>
        </div>
    </body>
</html>
