<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto-3</title>
</head>
<body>
<h1>TALLER 1 PHP</h1>   
     <p><b>Elaborar un algoritmo que permita ingresar el número de partidos ganados,
perdidos y empatados, por algún equipo en el torneo apertura, se debe mostrar su
puntaje total, teniendo en cuenta que por cada partido:</b></p>
<br>
<form action="sumapunto3.php" method="post">
        <label for="">Partidos Ganados: <input type="text" style="margin-top:13px;" name="Ganados"></label>
        <br>
        <label for="">Partidos Perdidos: <input type="text" style="margin-top:13px;" name="Perdidos"></label>
        <br>
        <label for="">Partidos Empatados: <input type="text" style="margin-top:13px;" name="Empatados"></label>
        <br>
        <input style="margin-top:20px;" type="submit" name="Total" value="Puntaje">
    </form>
</body>
</html>