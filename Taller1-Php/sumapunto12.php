<?php
    $Capital=$_POST["Capital"];

    if($Capital<500){
        $Total1=($Capital*0.02)+$Capital;
        echo "Total:$Total1";
    }elseif($Capital >= 500 && $Capital < 1500){
        $Total2=($Capital*0.45)+$Capital;
        echo "Total:$Total2";
    }elseif(""){
        $Total3=($Capital*0.7)+$capital;
        echo "Total:$Total3";
    }
?>