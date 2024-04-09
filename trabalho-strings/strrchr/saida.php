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

                        echo "strrchr()"."<br>";
                        $parte_da_frase = strrchr($frase, $posstr);
                        if ($parte_da_frase !== false) {
                            echo "<p>A última ocorrência da substring foi encontrada: $parte_da_frase.</p>";
                        } else {
                            echo "<p>A substring não foi encontrada na frase.</p>";
                        }                                                
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
