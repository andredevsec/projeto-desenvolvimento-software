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

						// Definindo os arrays de pratos e dias da semana
						$pratos = array(
							"0" => "Lasanha quatro queijos",
							"1" => "Frango ao molho",
							"2" => "Arroz com legumes",
							"3" => "Feijoada",
							"4" => "Panqueca",
							"5" => "Nhoque paulista",
							"6" => "Carne assada",
						);

						$dias_semana = array(
							"segunda" => "Segunda-feira",
							"terca" => "Terça-feira",
							"quarta" => "Quarta-feira",
							"quinta" => "Quinta-feira",
							"sexta" => "Sexta-feira",
							"sabado" => "Sábado",
							"domingo" => "Domingo",
						);

						// Obtendo os valores do código e do dia da semana do formulário
						$codigo = $_POST["codigo"];
						$dia_semana = $_POST["dia_semana"];

						// Verificando se o código e o dia da semana são válidos
						if (($pratos[$codigo]) && ($dias_semana[$dia_semana])) {
							// Código e dia da semana válidos
							$prato_dia = $pratos[$codigo];
							$dia_selecionado = $dias_semana[$dia_semana];

							// Exibindo o prato do dia com o preço
							echo "<h1>Prato do dia</h1>";
							echo "<p>$prato_dia ($dia_selecionado)</p>";
							echo "<p>Preço: R$ 12,60</p>"; // Preço fixo para este exemplo
						} else {
							// Código ou dia da semana inválido
							echo "<h2>Erro</h2>";
							echo "<p>Código ou dia da semana inválido. Por favor, tente novamente.</p>";
						}

						?>

					</td>
				</tr>
			</table>
		</section>
	</div>
</body>

</html>