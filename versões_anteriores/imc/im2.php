<!-- Codigo feito para fazer calculos de imc -->
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html>
  <body>
    <div class="img">
      <img src="https://www.drrogermoura.com.br/images/artigos/tabela-imc.png 800p600" >
    </div>
  
     <header>
        <h2> Resultado </h2>
      </header>

    <div class="imc">
      <h1>Calcular meu IMC</h1>
      <form name="imc" method="get">
        <label for="peso">Digite seu peso:</label><br>
        <input type="text" id="peso" name="peso"><br>
        <label for="altura">Digite sua altura:</label><br>
        <input type="text" id="altura" name="altura"><br><br>
        <input type="submit" value="calcular" name="calcular">
          
          <?php // Calculo do imc
            if(isset($_GET['calcular'])) {
              $altura = $_GET['altura'];
              $peso = $_GET['peso'];
              $calc = $peso/pow($altura,2) ; // faz o calculo do imc
              $imc = (number_format($calc,1)); // limite e arredonda as casas decimais para o IMC
              echo 'Seu imc e de '. $imc;  
                  }
            ?>

      </form> 
      
    </div>
  
  </body>
</html>


