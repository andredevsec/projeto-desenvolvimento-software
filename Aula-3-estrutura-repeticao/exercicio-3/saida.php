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
							// Obtenha os valores digitados no formulário
							$numero1 = $_POST["numero1"];
							$numero2 = $_POST["numero2"];
							$numero3 = $_POST["numero3"];
							$maior;
						
							// Verifique qual é o maior número
							if ($numero1 >= $numero2 && $numero1 >= $numero3) {
								$maior = $numero1;
							} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
								$maior = $numero2;
							} else {
								$maior = $numero3;
							}
						
							echo "O maior número é: $maior";
						}
						?>
					</td>
				</tr>
			</table>
		</section>
	</div>
</body>

</html>