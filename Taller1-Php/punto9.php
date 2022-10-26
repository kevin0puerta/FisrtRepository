<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto-9</title>
</head>
<body>
<h1>TALLER 1 PHP</h1>   
     <p><b>Un aprendiz desea saber cuál será su calificación final en cierta asignatura. Las notas que
se manejan son de 0 a 5.
<ul>
    <li>30% el primer examen.</li> 
    <li>30% el segundo examen</li>
    <li>40% el último examen</li>
</ul>
Pedir al usuario nombre, asignatura, las 3 notas de los exámenes y determinar la
calificación definitiva teniendo en cuenta los porcentajes dados. Además, para que el
aprendiz apruebe su calificación final debe ser mayor o igual a 4.0</b></p>
<br>
<form action="sumapunto9.php" method="post">
        <label for="">Nombre del aprendiz<input style="margin-top:20px;" type="text" name="Nombre"></label>
        <br>
        <label for="">Asignatura que desea promediar<input style="margin-top:20px;" type="text" name="Asignatura"></label>
        <br>
        <h3>Ingrese las notas de los examenes</h3>
        <br>
        <label for="" style="margin-left:20px;">Nota 1: <input type="text" name="nota1"> 30%</label>
        <label for="" style="margin-left:20px;">Nota 2: <input type="text" name="nota2"> 30%</label>
        <label for="" style="margin-left:20px;">Nota 3: <input type="text" name="nota3"> 40%</label>
        <input type="submit" style="margin-top:20px;" name="Total" value="Promediar">
    </form>
</body>
</html>