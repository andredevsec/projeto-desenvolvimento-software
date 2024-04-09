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
                        
                        echo "strpos()"."<br>";
                        $posicao = strpos($frase, $posstr);
                        if ($posicao !== false) {
                            echo "<p>A substring foi encontrada na posição: $posicao.</p>";
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
