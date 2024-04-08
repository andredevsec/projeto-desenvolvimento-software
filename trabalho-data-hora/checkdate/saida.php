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
                        $dia = $_POST["dia"];
                        $mes = $_POST["mes"];
                        $ano = $_POST["ano"];
                        if (checkdate($mes,$dia,$ano)){
                            echo "Sua data é válida";
                        }                            
                        else {
                            echo "Data inválida";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
