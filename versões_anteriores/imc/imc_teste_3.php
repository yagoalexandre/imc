<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <header>
<?php
    $altura = $_GET['altura'];
    $peso = $_GET['peso'];
    
    $calc = $peso/pow($altura,2) ; // faz o calculo do imc
    $imc = (number_format($calc,1)); // limite e arredonda as casas decimais para o IMC
    echo '<h1>Seu imc é de ' .$imc. '</h1>'; 
?>
</header>
</head>
<body>
<section>
    <img src="https://www.drrogermoura.com.br/images/artigos/tabela-imc.png">
</section>    
<header>
    <?php 
        if ($imc < 18.5) {
            echo"<h1>Você está muito abaixo do peso, talvez deva procurar um nutricionista</h1>";
        }
        elseif ( $imc > 18.5 and $imc < 24.8) {
            echo"<h1>Você está em seu peso ideal, Muito bom!!</h1>";
        }
        elseif ($imc > 24.8 and $imc < 30.0) {
            echo"<h1>Você está levemente acima do seu peso ideal, tome cuidado.</h1>";
        }
        elseif ($imc > 30.0 and $imc < 34.9) {
            echo"<h1>Você está já está com obesidade, talvez seja melhor procurar um nutricionista e começar uma dieta.</h1>";
        }
        elseif ($imc > 34.9 and $imc < 39.8) {
            echo"<h1>Você está em um grau servero de obesidade, talvez deva procurar ajudar médica.</h1>";
        }
        elseif ($imc > 40.0) {
            echo"<h1>Você está com sérios riscos a sua saúde, procure por ajudar assim que possível.</h1>";
        }
        
    ?>
</header>

</body>
</html>

<link rel="stylesheet" href="posicao.css">

