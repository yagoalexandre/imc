<!DOCTYPE html>
<html>
<body>

<h2>Calcular seu imc</h2>

<form name="imc" method="get" >
  <label for="peso">Seu peso:</label><br>
  <input type="text" id="peso" name="peso" value=""><br>
  
  <label for="altura">Sua altura:</label><br>
  <input type="text" id="altura" name="altura" value=""><br><br>
  
  <input type="submit" value="Checar">

  <?php
    
    $altura = $_GET['altura'];
    $peso = $_GET['peso'];
    
    $calc = $peso/pow($altura,2) ; // faz o calculo do imc
    $imc = (number_format($calc,1)); // limite e arredonda as casas decimais para o IMC
    echo 'Seu imc e de '. $imc;

?>

</form> 



</body>
</html>

