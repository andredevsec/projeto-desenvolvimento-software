
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
					//obtém os valores digitados no form
					$valorNome = $_POST["nome"];
                    $valorSenha = $_POST["senha"];
					echo "<h4>Bem vindo $valorNome </h4>";
				?>
				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>