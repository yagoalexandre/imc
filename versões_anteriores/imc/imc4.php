<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calulo de imc</title>
    <link rel="stylesheet" href="posicao.css">
</head>
<body>
    <header>
        <h1>Minha Calculadora de IMC</h1>
</header>
<section>
    <form method="get" action="imc_teste_3.php">
        <div>    
            <label for="peso">Seu peso:</label><br>
            <input type="text" id="peso" name="peso" placeholder="Digite seu peso"><br>
        </div>
       
        <div>
            <label for="altura">Sua altura:</label><br>
            <input type="text" id="altura" name="altura" placeholder="Digite sua altura"><br><br>
        </div>
       
        <div>
            <input type="submit" value="Calcular" name="calcular">
        </div>

    </form>
</section>
</body>


?>



</html>