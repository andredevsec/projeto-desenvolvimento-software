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
        <h1>MK time</h1>
        <form action="saida.php" method="post">
            <label>Digite um dia:</label>
            <input type="number" required="required" name="dia" size="40">
            <label>Digite um mes:</label>
            <input type="number" required="required" name="mes" size="40">
            <label>Digite um ano:</label>
            <input type="number" required="required" name="ano" size="40">
            <input type="submit" value="Verificar data" class="botao" />
        </form>
    </div>
</body>

</html>
