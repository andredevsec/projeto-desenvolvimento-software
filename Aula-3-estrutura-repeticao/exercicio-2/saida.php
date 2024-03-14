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
						// Verifique se o formulário foi enviado
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							// Obtenha o número digitado pelo usuário
							$numero = $_POST["numero"];

							// Verifique se o número é par ou ímpar
							if ($numero % 2 == 0) {
								echo "O número $numero é par.";
							} else {
								echo "O número $numero é ímpar.";
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