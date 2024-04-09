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
                        $posstr = $_POST['posstr'];
                        $velha = $frase;
                        $nova_frase = str_replace($velha, $posstr, $frase); // Substitui "velha" por "nova"
                        echo "<p>Frase com substituição: $nova_frase</p>";
                                                
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
