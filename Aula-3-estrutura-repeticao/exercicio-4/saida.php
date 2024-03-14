
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
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					// Obtenha o número digitado pelo usuário
					$numero = $_POST["numero"];
			  
					// Verifique se o número é um inteiro positivo
					if ($numero >= 0 && filter_var($numero, FILTER_VALIDATE_INT)) {
						// Inicialize o fatorial como 1
						$fatorial = 1;
			  
						// Calcula o fatorial usando um loop for
						for ($i = 1; $i <= $numero; $i++) {
							$fatorial *= $i;
						}
			  
						echo "O fatorial de $numero é: $fatorial";
					} else {
						echo "Por favor, insira um número inteiro positivo.";
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