<?php
    $Ganados=$_POST["Ganados"];
    $Perdidos=$_POST["Perdidos"];
    $Empatados=$_POST["Empatados"];

    $PuntosGanar=$Ganados*3;
    $PuntosPerdidos=$Perdidos*0;
    $PuntosEmpate=$Empatados*1;

    $Total=$PuntosGanar+$PuntosPerdidos+$PuntosEmpate;

    echo "El resultado de los partidos con los puntos aplicados es: $Total"
?>