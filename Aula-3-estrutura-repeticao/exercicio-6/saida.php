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
						// Verifique se o formulário foi enviado
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							// Obtenha o número digitado pelo usuário
							$numero = $_POST["numero"];

							// Verifique se o número é um inteiro positivo
							if ($numero >= 0 && filter_var($numero, FILTER_VALIDATE_INT)) {
								echo "<h3>Tabuada do número $numero:</h3>";
								for ($i = 1; $i <= 10; $i++) {
									$resultado = $numero * $i;
									echo "$numero x $i = $resultado Porque $numero é somado $i vezes: ";
									for ($j = 1; $j <= $i; $j++) {
										if ($j > 1) {
											echo " + ";
										}
										echo $numero;
									}
									echo " = $resultado<br>";
								}
							} else {
								echo "<p>Por favor, insira um número inteiro positivo.</p>";
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
