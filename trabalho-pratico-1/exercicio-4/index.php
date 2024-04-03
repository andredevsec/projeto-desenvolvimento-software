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
        <h1>Gerador de tabelas</h1>
        <form action="saida.php" method="post">
            <label>Titulo da tabela:</label>
            <input type="text" required="required" name="titulo" size="40">
            <label>Espaço ocupado pela tabela na página(%):</label>
            <select name="procentagem">
                <option>100%</option>
                <option>80%</option>
                <option>60%</option>
                <option>40%</option>
                <option>20%</option>
            </select>
            <label>Quantidade de linhas:</label>
            <input type="number" required="required" name="linhas" size="40">
            <label>Quantidade de colunas:</label>
            <input type="number" required="required" name="colunas" size="40">
            <label>Tamanho da borda (0-9):</label>
            <input type="number" required="required" name="tamanho-borda" min="0" max="9" size="40">
            <label>Cor do fundo:</label>
            <select name="cor-fundo">
                <option value="#FF0000">Vermelho</option>
                <option value="#0000FF">Azul</option>
                <option value="#00FF00">Verde</option>
                <option value="#FFFF00">Amarelo</option>
                <option value="#000000">Preto</option>
            </select>
            <label>Cor do texto:</label>
            <select name="cor-texto">
                <option value="#FF0000">Vermelho</option>
                <option value="#0000FF">Azul</option>
                <option value="#00FF00">Verde</option>
                <option value="#FFFF00">Amarelo</option>
                <option value="#000000">Preto</option>
            </select>
            <br>
            <input type="submit" value="Criar tabela" class="botao" />
        </form>
    </div>
</body>
</html>
