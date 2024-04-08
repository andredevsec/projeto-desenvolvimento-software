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
                        $dia = $_POST["dia"];
                        $mes = $_POST["mes"];
                        $ano = $_POST["ano"];

                        // Criar um timestamp usando strtotime()
                        $timestamp = strtotime("$ano-$mes-$dia");

                        // Formatar o timestamp para exibir a data e hora
                        $data_formatada = date("d/m/Y H:i:s", $timestamp);

                        // Exibir o timestamp e a data formatada
                        echo "O tempo em número de segundos desde a Epoch Unix (1 de janeiro de 1970 00:00:00 GMT) até o tempo especificado é: $timestamp";
                        echo "<br>";
                        echo "Exibindo a data formatada: $data_formatada";
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
