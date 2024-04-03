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
        <h1>Gerador de triangulo</h1>
        <form action="saida.php" method="post">
            <label>Altura:</label>
            <input type="number" required="required" name="altura" size="40" min="1" max="50">
            <label>Caractere de preenchimento:</label>
            <input type="text" maxlength="1" required="required" name="caracter-preenchimento" size="40">
            <label>Cor de preenchimento:</label>
            <select name="cor-preenchimento">
                <option value="#FF0000">Vermelho</option>
                <option value="#0000FF">Azul</option>
                <option value="#00FF00">Verde</option>
                <option value="#FFFF00">Amarelo</option>
                <option value="#000000">Preto</option>
            </select>
            <br>
            <input type="submit" value="Criar triangulo" class="botao" />
        </form>
    </div>
</body>

</html>