<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto-7</title>
</head>
<body>
<h1>TALLER 1 PHP</h1>   
     <p><b>Escribir un algoritmo que, ingrese los siguientes datos:
• Nombre del aprendiz
• Asignatura
• Calificación final.
Tener en cuenta que las calificaciones serán del 1 al 10,</b></p>
<br>
<form action="sumapunto7.php" method="post">
        <label for="">Nombre del estudiante: <input style="margin-top:20px;" type="text" name="Nombre"></label>
        <br>
        <label for="">Asignatura cursada:<input style="margin-top:20px;" type="text" name="Asignatura"></label>
        <br>
        <label for="">Nota final:<input style="margin-top:20px;" type="number" name="Calificacion"></label>
        <br>
        <input type="submit" style="margin-top:20px;" name="total" value="Consultar">
    </form>
</body>
</html>