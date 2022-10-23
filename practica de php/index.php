<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./assets/estilos/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="decorador.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<body>
    <form action="procesador.php" method="GET">

    <h1>Registrate</h1>
        <label for="">Nombre:</label><br>
        <input type="text" name="nombre" size="15"><br><br>

        <select name="carrera" id="carrera"> 
        <option value="ninguno">Asignatura</option>
        <option value="geologia">TNS Geología</option>
        <option value="minas">TNS en Minas</option>
        <option value="metales">TNS en Metales</option>
        <option value="informatica" >TNS en Informática</option>
    </select>

        <h3>Unidad 1<h3>
        <h4>33%<h4>

        <label for="">Nota1:</label><br>
        <input type="text" name="nota1" size="9"><br><br>

        <label for="">Nota2:</label><br>
        <input type="text" name="nota2" size="9"><br><br>

        <label for="">Nota3:</label><br>
        <input type="text" name="nota3" size="9"><br><br>

        <h3>Unidad 2<h3>
        <h4>33%<h4>

        <label for="">Nota4:</label><br>
        <input type="text" name="nota4" size="9"><br><br>

        <label for="">Nota5:</label><br>
        <input type="text" name="nota5" size="9"><br><br>

        <label for="">Nota6:</label><br>
        <input type="text" name="nota6" size="9"><br><br>

        <h3>Unidad 3<h3>
        <h4>34%<h4>

        <label for="">Nota7:</label><br>
        <input type="text" name="nota7" size="9"><br><br>

        <label for="">Nota8:</label><br>
        <input type="text" name="nota8" size="9"><br><br>

        <label for="">Nota9:</label><br>
        <input type="text" name="nota9" size="9"><br><br>

        <input type="submit" value="Calcule" name="submit">

    </form>
</body>
</center>
</html>