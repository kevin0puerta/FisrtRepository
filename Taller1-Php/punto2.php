<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto-2</title>
</head>
<body>
<h1>TALLER 1 PHP</h1>   
     <p><b>Se necesita obtener el promedio simple de un estudiante a partir de sus tres
        notas parciales.</b></p>
<br>
<form action="sumapunto2.php" method="post">
        <label for="">Materia  <input type="text" name="Materia"></label>
        <br>
        <label for="" >Parcial 1:<input type="text" style="margin-top:13px;" name="Parcial1"></label>
        <label for="" style="margin-left:10px;">Parcial 2:<input type="text" name="Parcial2"></label>
        <label for="" style="margin-left:10px;">Parcial 3:<input type="text" name="Parcial3"></label>
        <br>
        <input style="margin-top:15px;" type="submit" name="PromedioSimple" value="Promediar">
    </form>

</body>
</html>