<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estiloform.css" rel="stylesheet" type="text/css" />
    <style>
        span {
            padding: 2px;
        }
    </style>
</head>

<body>
    <div id="tformulario">
        <h1>str_split</h1>
        <form action="saida.php" method="post">
            <label>Digite uma frase:</label>
            <input type="text" required="required" name="text" size="40">
            <input type="submit" value="Enviar" class="botao" />
        </form>
    </div>
</body>

</html>