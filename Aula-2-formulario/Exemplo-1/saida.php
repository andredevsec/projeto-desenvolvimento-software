
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
					$valor = $_POST["num"];
					echo "<h4>A raiz quadrada do $valor: ".sqrt($valor)."</h4>";
				?>
				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>







