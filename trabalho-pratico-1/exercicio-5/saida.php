<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link href="css/estiloform.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="geral">
		<section id="conteudo">
			<table>
				<tr>
					<td>
						<?php
						$altura = $_POST["altura"];
						$caracterPreenchimento = $_POST["caracter-preenchimento"];
						$corPreenchimento = $_POST["cor-preenchimento"];

						// Cria o triangulo
						for ($i = 1; $i <= $altura; $i++) {
							// Imprime caracteres de preenchimento na cor especificada
							echo '<span style="color: ' . $corPreenchimento . '">';
							for ($j = 1; $j <= $i; $j++) {
								echo $caracterPreenchimento;
							}
							echo '</span><br>';
						}
						?>
					</td>
				</tr>
			</table>
		</section>
	</div>
</body>

</html>