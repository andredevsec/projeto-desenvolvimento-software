
<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="css/estiloform.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
	<div id="tformulario">
	<h1>Logar no sistema</h1>
	<form action="saida.php" method="post">
		<label>Nome de Usuário:</label>
		<input type="text" required="required" name="nome" size="40">
        <label>Senha:</label>
        <input type="password" required="required" name="senha" size="40">
        <br>
		<input type="submit" value="Acessar" class="botao"/>
        <input type="reset" value="Limpar" class="botao"/>
		<input type="reset" value="Esqueci minha senha" class="botao"/>
	</form>
	</div>
</body>
</html>





