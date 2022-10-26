<?php
    $Velocidad = $_POST["Velocidad"];
    $Tiempo = $_POST["Tiempo"];
    $Distancia = $Velocidad * $Tiempo;

    echo "Ladistancia recorrida fue: $Distancia" ;
?>