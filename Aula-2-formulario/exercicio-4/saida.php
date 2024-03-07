
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
					$valor1 = $_POST["num1"];
					$valor2 = $_POST["num2"];
					$valor3 = $_POST["num3"];
					$valor4 = $_POST["num4"];
					$resultado = sqrt(pow(($valor2-$valor1) ,2) + pow(($valor3-$valor4) ,2));
					echo "<h4>A distancia é: ".$resultado."</h4> <br>";
				?>
				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>