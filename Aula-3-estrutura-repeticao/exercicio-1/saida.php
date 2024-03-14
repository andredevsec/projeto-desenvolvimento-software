
<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8">
  <link href="css/estiloform.css" rel="stylesheet" type="text/css" /> 
</head>
</script>
<body>
<div id="geral">
  <section id="conteudo">
		  <table>
			 <tr>
				<td> 				
				<?php
				$login_correto = "usuario";
				$senha_correta = "senha123";
				
				// Verifique se o formulário foi enviado
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					// Obtenha os valores digitados no formulário
					$valorNome = $_POST["nome"];
					$valorSenha = $_POST["senha"];
				
					// Verifique se o login e a senha correspondem aos valores corretos
					if ($valorNome === $login_correto && $valorSenha === $senha_correta) {
						echo "<h4>Bem-vindo $valorNome!</h4>";
					} else {
						echo "<h4>Login ou senha incorretos. Por favor, tente novamente.</h4>";
					}
				}
				?>
				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>