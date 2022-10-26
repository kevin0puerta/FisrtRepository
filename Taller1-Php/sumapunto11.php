<?php
    $Precio=$_POST["precio"];
    $Final= ($Precio*0.15)+$Precio;

    echo "el valor al que se debe vender el producto es de: $Final";
?>