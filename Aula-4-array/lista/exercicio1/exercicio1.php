<?php
    // Definindo os arrays
    $compras = ['Array', "Sabão", "Desodorante","Feijão", 'Refrigerante', 'Queijo'];
    $compras2 = ['Pão', 'Leite'];

    // Exibindo os arrays
    echo 'Array 1: ';
    print_r($compras);
    echo '<br>';
    echo 'Array 2: ';
    print_r($compras2);
    echo '<br><br>';

    // Função unset - Remove um elemento específico do array
    unset($compras[0]);
    echo 'unset <br> Remove o primeiro elemento do array';
    echo '<br>';
    print_r($compras);
    echo '<br><br>';

    // Função count e sizeof - Conta o número de elementos em um array
    echo 'count e sizeof <br> Contam o número de elementos em um array';
    echo '<br>';
    echo 'Quantidade de elementos em $compras utilizando count: ' . count($compras). '<br>';
    echo 'Quantidade de elementos em $compras utilizando sizeof: ' . sizeof($compras);
    echo '<br><br>';

    // Função array_push - Adiciona um ou mais elementos no final de um array
    echo 'array_push <br> Adiciona um ou mais elementos no final de um array';
    echo '<br>';
    array_push($compras, $compras2);
    print_r($compras);
    echo '<br><br>';

    // Função array_pop - Remove e retorna o último elemento de um array, nao usar a variavel $compras
    echo 'array_pop <br> Remove e retorna o último elemento de um array';
    echo '<br>';
    $ultimo_elemento = array_pop($compras2);
    echo 'Último elemento removido: ' . $ultimo_elemento . '<br>';
    print_r($compras2);
    echo '<br><br>';

    // Função array_shift - Remove e retorna o primeiro elemento de um array
    echo 'array_shift <br> Remove e retorna o primeiro elemento de um array';
    echo '<br>';
    $primeiro_elemento = array_shift($compras);
    echo 'Primeiro elemento removido: ' . $primeiro_elemento . '<br>';
    print_r($compras);
    echo '<br><br>';

    // Função array_unshift - Adiciona um ou mais elementos no início de um array
    echo 'array_unshift <br> Adiciona um ou mais elementos no início de um array';
    echo '<br>';
    array_unshift($compras, 'Arroz', 'Macarrão');
    print_r($compras);
    echo '<br><br>';

    // Função array_search - Procura por um valor em um array e retorna a chave correspondente
    echo 'array_search <br> Procura por um valor em um array e retorna a chave correspondente';
    echo '<br>';
    $chave = array_search('Feijão', $compras);
    echo 'Chave do elemento "Feijão" no array $compras: ' . $chave;
    echo '<br><br>';

    // Função in_array - Verifica se um valor existe em um array
    echo 'in_array <br> Verifica se um valor existe em um array';
    echo '<br>';
    $existe = in_array('Refrigerante', $compras);
    echo 'O valor "Refrigerante" existe no array $compras? ' . ($existe ? 'Sim' : 'Não');
    echo '<br><br>';

    // Função shuffle - Embaralha os elementos de um array
    echo 'shuffle <br> Embaralha os elementos de um array';
    echo '<br>';
    shuffle($compras);
    print_r($compras);
    echo '<br><br>';

    // Função sort - Ordena um array em ordem crescente
    echo 'sort <br> Ordena um array em ordem crescente';
    echo '<br>';
    sort($compras);
    print_r($compras);
    echo '<br><br>';

    // Função rsort - Ordena um array em ordem decrescente
    echo 'rsort <br> Ordena um array em ordem decrescente';
    echo '<br>';
    rsort($compras);
    print_r($compras);
    echo '<br><br>';
?>
