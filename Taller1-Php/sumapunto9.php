<?php
    $Nombre=$_POST["Nombre"];
    $Asignatura=$_POST["Asignatura"];

    $nota1=$_POST["nota1"];
    $nota2=$_POST["nota2"];
    $nota3=$_POST["nota3"];

    $PromedioTotal=($nota1*0.30)+($nota2*0.30)+($nota3*0.40);

    if($PromedioTotal>=4){
        echo "El estudiante ".$Nombre." Aprueba ".$Asignatura." con un promedio de ".$PromedioTotal;
    }elseif($PromedioTotal<=3.9){
        echo "El estudiante ".$Nombre." Reprueba ".$Asignatura." con un promedio de ".$PromedioTotal;
    }
?>