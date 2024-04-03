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
                        $altura = $_POST["altura"] /100;
                        $peso = $_POST["peso"];

                        // Calcula o IMC
                        $imc = $peso / ($altura * $altura);

                        // Determina o estado de saúde
                        if ($imc < 18.5) {
                            $mensagem = "Abaixo do peso";
                        } elseif ($imc >= 18.5 && $imc < 24.9) {
                            $mensagem = "Peso normal";
                        } elseif ($imc >= 24.9 && $imc < 29.9) {
                            $mensagem = "Sobrepeso";
                        } elseif ($imc >= 29.9 && $imc < 34.9) {
                            $mensagem = "Obesidade";
                        } else {
                            $mensagem = "Obesidade mórbida";
                        }

                        // Exibe o resultado
                        echo "Seu IMC é: " . round($imc, 2) . "<br>";
                        echo "Você está classificado como: " . $mensagem;
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
