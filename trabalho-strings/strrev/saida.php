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
                        $frase_invertida = strrev($frase);
                        echo "<p>Frase invertida: $frase_invertida</p>";                 
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
