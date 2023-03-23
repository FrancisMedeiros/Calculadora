<?php

function soma($num1, $num2){
    $result = $num1 + $num2;
    return $result;
}

function subt($num1, $num2){
    $result = $num1 - $num2;
    return $result;
}

function mult($num1, $num2){
    $result = $num1 * $num2;
    return $result;
}

function divi($num1, $num2){


    if (($num1 == 0) or ($num2 == 0) or ($num1 and $num2 == 0))
        echo "Não é possível realizar divisões por Zero!";
    
    else{
        $result = $num1 / $num2;
        echo "RESULTADO: " . $result;
}
}

function calculadora($num1, $num2, $opcao){
    if ($opcao == 1)
        echo "RESULTADO: " . soma($num1, $num2);
    elseif ($opcao == 2)
        echo "RESULTADO: " . subt($num1, $num2);

    elseif ($opcao == 3)
        echo "RESULTADO: " . mult($num1, $num2);

    elseif ($opcao == 4)
        echo divi($num1, $num2);
    
    else
        echo " ";
}

?>