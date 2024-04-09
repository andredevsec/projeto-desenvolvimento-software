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
                        echo "substring() Para obter os primeiros 5 caracteres da frase"."<br>";
                        $substring = substr($frase, 0, 5); // Obtém os primeiros 5 caracteres da frase
                        echo "<p>Os primeiros 5 caracteres da frase são: $substring</p>";                                                
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
