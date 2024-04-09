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
                        $frase_trim = trim($frase); // Remove espaços no início e no final
                        $frase_ltrim = ltrim($frase); // Remove espaços no início
                        $frase_rtrim = rtrim($frase); // Remove espaços no final
                        echo "<p>Frase com espaços removidos: $frase_trim</p>";
                        echo "<p>Frase com espaços no início removidos: $frase_ltrim</p>";
                        echo "<p>Frase com espaços no final removidos: $frase_rtrim</p>";                                         
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
