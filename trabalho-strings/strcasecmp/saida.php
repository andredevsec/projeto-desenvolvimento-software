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
                        $frase = $_POST["text"];
                        $frase2 = $_POST["text2"];
                        $resultado = strcasecmp($frase, $frase2); 
                        // Retorna 0 se forem iguais, <0 se str1 < str2, e >0 se str1 > str2
                        echo "<p>Resultado da comparação sem diferenciar maiúsculas e minúsculas: $resultado</p>";                
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
