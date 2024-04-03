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
        <h1>Calculador de notas</h1>
        <form action="saida.php" method="post">
            <label>Valor total ta prova 1:</label>
            <input type="number" required="required" name="prova1" size="40">
            <label>Valor total ta prova 2:</label>
            <input type="number" required="required" name="prova2" size="10">
            <label>Nota prova 1:</label>
            <input type="number" required="required" name="nota1" size="40">
            <label>Nota prova 2:</label>
            <input type="number" required="required" name="nota2" size="10">
            <input type="submit" value="Calcular" class="botao" />
        </form>
    </div>
</body>

</html>
