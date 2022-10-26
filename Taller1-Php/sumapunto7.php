<?php
    $Nombre=$_POST["Nombre"];
    $Asignatura=$_POST["Asignatura"];
    $Calificacion=$_POST["Calificacion"];

    if($Calificacion>7){
        echo "El estudiante $Nombre a Aprovado la asignatura de $Asignatura en $Calificacion";
   }elseif($Calificacion<7){
        echo "El estudiante $Nombre a Reprovado la asignatura de $Asignatura en $Calificacion";
}
?>