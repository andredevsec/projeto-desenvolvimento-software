<?php
// Inclua o arquivo clima.php onde a lógica de obter os dados do clima será centralizada
require_once("localidade.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="css/style.css" rel="stylesheet" type="text/css" /> 
  <!-- Inclua o jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <title>Consumindo API</title>
</head>
<body>
  <header>
    <h1>Consulta Localidade</h1>
  </header>
  <section>
    <form id="cityForm" action="." method="POST">
      <label for="nome">Digite o nome da cidade</label>
      <input type="text" required="required" name="city" id="city" size="40">
      <br>
      <input type="submit" value="Consultar" class="botao"/>
      <br>
    </form>
    <div id="cityInfo"></div>
  </section>

  <script>
   
  </script>
</body>
</html>
