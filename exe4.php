<?php

$num = 30;
$a = 41;
$b = 50;
$c = 40;

if(is_numeric($num)){
    if (($num > 41) && ($num < 50)) {
        echo "Você está na velocidade correta! <br> ";
    }
    elseif ($num == 40) {
        echo "Atenção! <br> ";
    } 
    elseif ($num > 50) {
        echo "Você está multado! <br> ";
    } 
}else{
    //Não é número!
}

    ?>



