<?php
    $Mayor=$_POST["Mayor"];
    $Menor=$_POST["Menor"];

    if ( $Mayor > $Menor ){
        $Diferencia=$Mayor-$Menor;
        echo "El hermano mayor tiene ".$Mayor." con la diferencia de ".$Diferencia." años";
    }
    elseif ( $Mayor < $Menor ){
        $Diferencia=$Menor-$Mayor;
        echo "El hermano mayor tiene ".$Menor." con la diferencia de ".$Diferencia." años";
    }
?>