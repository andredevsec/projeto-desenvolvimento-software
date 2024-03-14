
<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="css/estiloform.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
	<div id="tformulario">
	<h1>Maior número</h1>
	<form action="saida.php" method="post">
		<label>Informe o peimeiro número:</label>
		<input type="number" required="required" name="numero1" size="40">
		<label>Informe o segundo número:</label>
		<input type="number" required="required" name="numero2" size="40">
		<label>Informe o terceiro número:</label>
		<input type="number" required="required" name="numero3" size="40">
        <br>
		<input type="submit" value="Verificar" class="botao"/>
	</form>
	</div>
</body>
</html>





