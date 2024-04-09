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
                        $caracteres = str_split($frase);
                        echo "<p>Caracteres da frase:</p><ul>";
                        foreach ($caracteres as $caractere) {
                            echo "<li>$caractere</li>";
                        }
                        echo "</ul>";                 
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
