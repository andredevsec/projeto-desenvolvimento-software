
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
					$terca = $valor/3;
					echo "<h4>A terça parte do numero informado é: ".$terca."</h4> <br>";
				?>
				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>