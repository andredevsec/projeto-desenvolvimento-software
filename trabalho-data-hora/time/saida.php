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
                        echo "time(): Esta função retorna o tempo atual em segundos desde a Época Unix (1 de janeiro de 1970 00:00:00 UTC) como um número inteiro. Esse valor é armazenado na variável.";
                        echo "<br>";
                        $t = time();
                        echo($t . "<br>");
                        echo "date Y-d-m: Esta função formata a data representada pela time() no formato especificado, que é Y-D-M. Isso significa que a data será formatada como ano-mês-dia. O segundo parâmetro t é o timestamp que você deseja formatar. O resultado é então impresso na tela.";
                        echo("<br>");
                        echo "Y-d-m: ";
                        echo(date("Y-m-d",$t));
                        echo "<br>";
                        echo "d-m-Y: ";
                        echo(date("d-m-Y",$t));
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
