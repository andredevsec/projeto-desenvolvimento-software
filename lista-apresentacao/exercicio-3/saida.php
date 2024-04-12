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
            $Nome = "all";
            $Senha = 123456;
            session_start();

            $cadastro = time();
            $dataAtivacao = mktime(0,0,0,date("m", $cadastro), date("d", $cadastro)+7, date("y", $cadastro));

            if(isset($_POST["nome"]) && isset($_POST["senha"])) {
              //obtém os valores digitados no form
              $valorNome = $_POST["nome"];
              $valorSenha = $_POST["senha"];

              if ($valorNome != $Nome) {
                echo "<p>Usuário incorreto</p>";
              } else {
                $_SESSION['valorNome'] = $valorNome;
              }
              if ($valorSenha != $Senha) {
                echo "<p>Senha incorreto</p>";
              } else {
                $_SESSION['valorSenha'] = $valorSenha;
              }

              // Corrigindo o uso de setcookie
              setcookie('valorNome', $valorNome);
              setcookie('valorSenha', $valorSenha);

              $senha_md5 = md5($valorSenha);
              echo "<h4>Seu cadastro será ativado em: " . date("Y-m-d", $dataAtivacao) . "</h4>";
              echo "<h4>Bem vindo: $valorNome </h4>";
            } else {
              echo "<p>Por favor, preencha todos os campos do formulário.</p>";
            }
          ?>
        </td>
      </tr>
    </table>	 	
  </section>
</div>
</body>
</html>
