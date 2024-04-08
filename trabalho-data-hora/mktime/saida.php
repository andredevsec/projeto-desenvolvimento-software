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

                        // Criar um timestamp usando mktime()
                        $timestamp = strtotime("$ano-$mes-$dia");
                        $data_formatada = date("d/m/Y H:i:s", $timestamp);
                        // Exibir a data e hora formatadas
                        echo "O tempo em número de segundos entre a Era Unix (January 1 1970 00:00:00 GMT), e o tempo especificado: $timestamp";
                        echo "<br>";
                        echo "Exibindo a data formatada: $data_formatada "
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
