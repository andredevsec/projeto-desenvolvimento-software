﻿<!DOCTYPE html>
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
                        $tamanho = strlen($frase);

                        echo "strlen()"."<br>";
                        echo "<p>O tamanho da frase é: $tamanho caracteres.</p>";                                                
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
