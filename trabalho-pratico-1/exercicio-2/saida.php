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
                        $prova1 = $_POST["prova1"];
                        $prova2 = $_POST["prova2"];
                        $nota1 = $_POST["nota1"];
                        $nota2 = $_POST["nota2"];
                        $notaTotal = $nota1 + $nota2;
                        $totalProvas = $prova1 + $prova2;
                        $porcentagemProva1 = round(($nota1 / $prova1) * 100);
                        $porcentagemProva2 = round(($nota2 / $prova2) * 100);
                        $porcentagemTotal = round(($notaTotal / $totalProvas) * 100);

                        // Determina o conceito
                        $conceito = "";
                        if ($porcentagemTotal < 60) {
                            $conceito = "Péssimo";
                        } elseif ($porcentagemTotal < 70) {
                            $conceito = "Ruim";
                        } elseif ($porcentagemTotal < 80) {
                            $conceito = "Bom";
                        } elseif ($porcentagemTotal < 90) {
                            $conceito = "Ótimo";
                        } else {
                            $conceito = "Excelente";
                        }

                        echo "O valor total das duas provas é de $totalProvas pontos<br>";
                        echo "Em relação à prova 1, o aluno obteve $porcentagemProva1% do total.<br>";
                        echo "Em relação à prova 2, o aluno obteve $porcentagemProva2% do total.<br>";
                        echo "O aluno totalizou com as duas provas $notaTotal pontos.<br>";
                        echo "A porcentagem total do aluno em relação ao total de pontos foi de $porcentagemTotal%.<br>";
                        echo "O conceito do aluno foi $conceito.";
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
