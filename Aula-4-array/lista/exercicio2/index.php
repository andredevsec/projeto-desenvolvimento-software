<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/estiloform.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="tformulario">
		<h1>Cardápio</h1>
		<form action="saida.php" method="post">
			<label>Entre com um código 0 a 6</label>
			<input type="number" required="required" name="codigo" size="40" max="6" min="0">
			<label for="dia_semana">Selecione um dia da semana:</label>
			<select id="dia_semana" name="dia_semana">
				<option value="segunda">Segunda-feira</option>
				<option value="terca">Terça-feira</option>
				<option value="quarta">Quarta-feira</option>
				<option value="quinta">Quinta-feira</option>
				<option value="sexta">Sexta-feira</option>
				<option value="sabado">Sábado</option>
				<option value="domingo">Domingo</option>
			</select>
			<br>
			<input type="submit" value="Acessar" class="botao" />
			<input type="reset" value="Limpar" class="botao" />
		</form>
	</div>
</body>

</html>
