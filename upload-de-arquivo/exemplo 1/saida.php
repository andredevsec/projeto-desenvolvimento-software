
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
					//pasta que os arquivos seram salvos
					$pasta = 'uploads/';
					//nome temporario do arquivo
					$tmpName = $_FILES['arquivo']['tmp_name'];
					//nome do arquivo original
					$name = $_FILES['arquivo']['name'];
					if (!empty($name)) {
						//move o arquivo para a pasta
						move_uploaded_file($tmpName, $pasta.$name);
						echo "Arquivo enviado com sucesso!";
					} else {
						echo "Erro ao enviar arquivo!";
					}
					?>
				<br/>
					<a href="index.php">Voltar</a>
				</div>

				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>












