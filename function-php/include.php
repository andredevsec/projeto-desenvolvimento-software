<?php
include 'funcoes.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o formulário foi submetido
    $numeros = $_POST['numeros'];
    $numeros = explode(',', $numeros); // Converte a string de números separados por vírgula em um array
    echo "A média é: " . calcularMedia($numeros);
} else {
    // Se o formulário não foi submetido, exibe o formulário para o usuário inserir os números
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="numeros">Insira os números separados por vírgula:</label><br>
    <input type="text" id="numeros" name="numeros"><br>
    <input type="submit" value="Calcular Média">
</form>
<?php
}
?>