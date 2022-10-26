<?php
    $Volantes=$_POST["Volantes"];
    $Posters=$_POST["Posters"];
    $Tarjetas=$_POST["Tarjetas"];

    $PrecioVolantes=$Volantes*2000;
    $PrecioPosters=$Posters*5000;
    $PrecioTarjetasDePresentacion=$Tarjetas*500;

    $Total=$PrecioVolantes+$PrecioPosters+$PrecioTarjetasDePresentacion;

    echo "Usted a solicitado $Volantes volantes.El precio de cada volante es de 2000,El total seria: $PrecioVolantes
    <br/> Usted a solicitado $Posters posters.El precio de cada poster es de 5000,El total seria: $PrecioPosters
    <br/> Usted a solicitado $Tarjetas tarjetas.El precio de cada tarjeta es de 500,El total seria: $PrecioTarjetasDePresentacion
    <br/> El total de todo lo solicitado seria: $Total"
?>