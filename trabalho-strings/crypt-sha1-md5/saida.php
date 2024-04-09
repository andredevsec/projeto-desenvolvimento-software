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
                        $frase_criptografada = crypt($frase, '$6$rounds=5000$secretpassword$'); // Criptografia usando algoritmo Blowfish
                        $frase_sha1 = sha1($frase); // Criptografia usando SHA-1
                        $frase_md5 = md5($frase); // Criptografia usando MD5
                        echo "<p>Frase criptografada: $frase_criptografada</p>";
                        echo "<p>Frase criptografada com SHA-1: $frase_sha1</p>";
                        echo "<p>Frase criptografada com MD5: $frase_md5</p>";                                                               
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
