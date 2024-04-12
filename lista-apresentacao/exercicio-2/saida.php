
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
					$cadastro = time();
					$dataAtivacao = mktime(0,0,0,date("m", $cadastro), date("d", $cadastro)+7, date("y", $cadastro));
					$dataAtivacaoFormatada = date("d-m-Y", $dataAtivacao);
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
					echo "<h4>Seu cadastro será ativado em: $dataAtivacaoFormatada </h4>";
					echo "<h4>Bem vindo: $valorNome </h4>";
				?>
				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>