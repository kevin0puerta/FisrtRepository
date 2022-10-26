<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto-6</title>
</head>
<body>
<h1>TALLER 1 PHP</h1>   
     <p><b>Elabora un programa que solicite al cliente el número de volantes, posters y
tarjetas de presentación para imprimir, ten en cuenta que:
 Cada volante tendrá un valor de impresión de: $2.000
 Cada poster tendrá un valor de impresión de: $5.000
 Y las tarjetas de presentación a $500 cada una.
Se requiere saber el total por cada tipo de documento y el total a pagar por todas las
impresiones</b></p>
<br>
<form action="sumapunto6.php" method="post">
        <label for="">Volantes<input style="margin-top:20px;" type="text" name="Volantes"></label>
        <br>
        <label for="">Posters<input style="margin-top:20px;" type="text" name="Posters"></label>
        <br>
        <label for="">Tarjetas de presentacion<input style="margin-top:20px;" type="text" name="Tarjetas"></label>
        <br>
        <input type="submit" style="margin-top:20px;" name="Total" value="Consultar Total">
    </form>
</body>
</html>