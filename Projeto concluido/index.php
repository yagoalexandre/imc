<!-- Código para calcular a IMC (indice de massa corporal), neste primeiro codigo serve para criar 
os balões de pergunta e mandar para o calc.php -->

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
    <form method="get" action="calc.php">
        <div>    
            <label for="peso">Seu peso:</label><br>
            <input type="text" id="peso" name="peso" placeholder="Digite seu peso ex: 60.00"><br>
        </div>
       
        <div>
            <label for="altura">Sua altura:</label><br>
            <input type="text" id="altura" name="altura" placeholder="Digite sua altura ex: 1.70"><br><br>
        </div>
       
        <div>
            <input type="submit" value="Calcular" name="calcular">
        </div>

    </form>
</section>
</body>
</html>