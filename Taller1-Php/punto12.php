<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto-12</title>
</head>
<body>
<h1>TALLER 1 PHP</h1>   
     <p><b>Calcular el interés mensual generado por un capital. La tasa de interés mensual
depende del capital que fue depositado. Si el capital es menor a $500 pesos, la tasa
de interés será del 2% mensual. Si el capital es mayor o igual a $500 pesos pero
menor a $1.500 pesos, el interés será del 4.5%, y si el capital es mayor o igual a
$1.500 pesos la tasa de interés será del 7%. Se debe ingresar el capital y mostrar el
capital ingresado y el total del capital + los intereses.</b></p>
<br>
<form action="sumapunto12.php" method="post">
        <label for="">Capital requerida<input type="text" name="Capital"></label>
        <input type="submit" style="margin-left:20px;" name="Total" value="total">
    </form>
</body>
</html>