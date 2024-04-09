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
                        $frase_minuscula = strtolower($frase);
                        $frase_maiuscula = strtoupper($frase);
                        echo "<p>Frase em minúsculas: $frase_minuscula</p>";
                        echo "<p>Frase em maiúsculas: $frase_maiuscula</p>";                 
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
