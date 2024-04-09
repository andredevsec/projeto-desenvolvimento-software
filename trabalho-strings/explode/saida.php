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
                        $palavras = explode(" ", $frase); // Divide a frase em palavras separadas por espaço
                        echo "<p>PALAVRAS:</p><ul>";
                        foreach ($palavras as $palavra) {
                            echo "<li>$palavra</li>";
                        }
                        echo "</ul>"                  
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
