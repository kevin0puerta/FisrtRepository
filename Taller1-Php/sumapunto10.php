<?php
    $CompraTotal=$_POST["Compra"];
    $Total=$CompraTotal-($CompraTotal*0.20);

    if($CompraTotal >= 20000){
        echo "El precio a pagar por sus productos es de $Total $.Por descuento del 20%";
    }else{
        echo "El precio a pagar por sus productos es de $CompraTotal $";
    }
?>