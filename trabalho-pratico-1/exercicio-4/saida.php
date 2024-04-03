<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8">
  <link href="css/estiloform.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
<div id="geral">
  <section id="conteudo">
    <?php
      $titulo = $_POST["titulo"];
      $procentagem = $_POST["procentagem"];
      $linhas = $_POST["linhas"];
      $colunas = $_POST["colunas"];
      $tamanhoborda = $_POST["tamanho-borda"];
      $corfundo = $_POST["cor-fundo"];
      $cortexto = $_POST["cor-texto"];

      // Verifica se os dados foram fornecidos
      if ($titulo && $linhas && $colunas) {
        echo "<p>Tabela gerada com sucesso!</p>";
        echo "<p>$titulo</p>";
        echo "<table border='$tamanhoborda' style='background-color: $corfundo; color: $cortexto;'>";
        for ($i = 1; $i <= $linhas; $i++) {
          echo "<tr>";
          for ($j = 1; $j <= $colunas; $j++) {
            echo "<td>Linha $i Coluna $j</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
      } else {
        echo "<p>Favor preencher todos os campos do formulário.</p>";
      }
    ?>
  </section>
</div>
</body>
</html>
