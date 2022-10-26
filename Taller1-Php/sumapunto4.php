<?php
    $NumeroHoras=$_POST["NumeroHoras"];
    $ValorHoras=$_POST["ValorHoras"];
    $Sueldo=$NumeroHoras*$ValorHoras;

    echo "El numero de horas laboradas en el mes es $NumeroHoras <br/> Cada hora laborada cuesta $ValorHoras <br/> En total su pago es $Sueldo"
?>