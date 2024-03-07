
<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="css/estiloform.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
	<div id="tformulario">
	<h1>Distancia entre dois pontos</h1>
	<form action="saida.php" method="post">
		<label>Digite um número x1:</label>
		<input type="number" required="required" name="num1" size="40">      
		<label>Digite um número x2:</label>
		<input type="number" required="required" name="num2" size="40">   
		<label>Digite um número y1:</label>
		<input type="number" required="required" name="num3" size="40">   
		<label>Digite um número y2:</label>
		<input type="number" required="required" name="num4" size="40">    
        <input type="submit" value="Calcular" class="botao"/>
	</form>
	</div>
</body>
</html>





