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
			$largura = $_POST["largura"];
			$caracterBorda = $_POST["caracter-borda"];
			$corBorda = $_POST["cor-borda"];
			$caracterPreenchimento = $_POST["caracter-preenchimento"];
			$corPreenchimento = $_POST["cor-preenchimento"];
			
			// Cria o retângulo
			for ($i =0 ; $i < $altura; $i++) {
				for ($j = 0; $j < $largura; $j++) {
					if ($i == 0 || $i == $altura - 1 || $j == 0 || $j == $largura - 1 ) {
						echo "<span style=\"color: $corBorda;\">$caracterBorda</span>";
					} else {
						echo "<span style=\"color: $corPreenchimento;\">$caracterPreenchimento</span>";
					}
				}
				echo "<br>";
			}			
          ?>
        </td>
      </tr>
    </table>   
  </section>
</div>
</body>
</html>
