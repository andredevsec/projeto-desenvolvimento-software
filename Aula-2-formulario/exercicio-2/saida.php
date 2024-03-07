
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
					$sucessor = $valor+1;
					$antecessor = $valor-1;
					echo "<h4>Seu antecessor ".$antecessor."</h4> <br>";
					echo "<h4>Seu sucessor ".$sucessor."</h4> <br>";					
				?>
				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>