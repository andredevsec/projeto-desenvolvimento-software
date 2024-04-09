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
                        $frase_embaralhada = str_shuffle($frase); // Embaralha os caracteres da frase
                        echo "<p>Frase embaralhada: $frase_embaralhada</p>";                  
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
