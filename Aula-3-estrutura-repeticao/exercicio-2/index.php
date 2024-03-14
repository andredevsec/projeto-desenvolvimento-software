
<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="css/estiloform.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
	<div id="tformulario">
	<h1>Verificar número (Par ou Impar)</h1>
	<form action="saida.php" method="post">
		<label>Informe o número:</label>
		<input type="number" required="required" name="numero" size="40">
        <br>
		<input type="submit" value="Verificar" class="botao"/>
        <input type="reset" value="Limpar" class="botao"/>
	</form>
	</div>
</body>
</html>





