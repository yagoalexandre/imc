<?php
    
    $altura = $_GET ['altura'];
    $peso = $_GET ['peso'];
    
    $calc = $peso/pow($altura,2) ; // faz o calculo do imc
    $imc = (number_format($calc,1)); // limite e arredonda as casas decimais para o IMC
    echo 'Seu imc é de '. $imc;

?>
