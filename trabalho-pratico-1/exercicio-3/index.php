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
        <h1>Calculador de IMC</h1>
        <form action="saida.php" method="post">
            <label>Altura:</label>
            <input type="number" required="required" name="altura" size="40">
            <label>Peso:</label>
            <input type="number" required="required" name="peso" size="10">
            <input type="submit" value="Calcular IMC" class="botao" />
        </form>
    </div>
</body>

</html>
