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
						function ePrimo($num)
						{
							if ($num <= 1) {
								return false;
							}
							for ($i = 2; $i <= $num / 2; $i++) {
								if ($num % $i == 0) {
									return false;
								}
							}
							return true;
						}

						// Verifique se o formulário foi enviado
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							// Obtenha o número digitado pelo usuário
							$numero = $_POST["numero"];

							// Verifique se o número é um inteiro positivo
							if ($numero >= 0 && filter_var($numero, FILTER_VALIDATE_INT)) {
								// Verifique se o número é primo
								if (ePrimo($numero)) {
									echo "O número $numero é primo.";
								} else {
									echo "O número $numero não é primo.";
								}
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