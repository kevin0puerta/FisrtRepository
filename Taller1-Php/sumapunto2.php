<?php
    $Materia=$_POST["Materia"];
    $Parcial1=$_POST["Parcial1"];
    $Parcial2=$_POST["Parcial2"];
    $Parcial3=$_POST["Parcial3"];

    $PromedioSimple=($Parcial1+$Parcial2+$Parcial3)/3;

    echo "El promedio de la materia $Materia es: $PromedioSimple";
?>