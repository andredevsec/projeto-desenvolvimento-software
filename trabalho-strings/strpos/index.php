<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estiloform.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="tformulario">
        <h1>strpos</h1>
        <form action="saida.php" method="post">
            <label>Digite uma frase:</label>
            <input type="text" required="required" name="text" size="40">
            <label>Digite um caracetere para ser encontrado:</label>
            <input type="text" required="required" name="posstr" size="40" maxlength="1">
            <input type="submit" value="Enviar" class="botao" />
        </form>
    </div>
</body>

</html>
