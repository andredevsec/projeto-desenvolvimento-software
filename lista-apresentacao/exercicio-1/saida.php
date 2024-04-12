
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
					$Nome = "all";
					$Senha = 123456;
					//obtém os valores digitados no form
					$valorNome = $_POST["nome"];
                    $valorSenha = $_POST["senha"];

					if ($valorNome != $Nome) {
						echo "<p>Usuário incorreto</p>";
					}
					if ($valorSenha != $Senha) {
						echo "<p>Senha incorreto</p>";
					}

					$senha_md5 = md5($valorSenha);
					echo "<h4>A senha criptografada em md5: $senha_md5 </h4>";
					echo "<h4>Bem vindo: $valorNome </h4>";
				?>
				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>