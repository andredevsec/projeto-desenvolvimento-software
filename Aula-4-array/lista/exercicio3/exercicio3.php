<?php

// Definindo o número de linhas e colunas da matriz
$linhas = 4;
$colunas = 4;

// Inicializando uma matriz vazia
$matriz = array();

// Loop para iterar sobre as linhas da matriz
for ($i = 0; $i < $linhas; $i++) {
    // Loop para iterar sobre as colunas da matriz
    for ($j = 0; $j < $colunas; $j++) {
        // Verificando se estamos nas bordas da matriz
        if ($i == 0 || $i == $linhas - 1 || $j == 0 || $j == $colunas - 1) {
            // Se sim, preenche com 'X'
            $matriz[$i][$j] = 'X';
        } else {
            // Se não, preenche com 'Z'
            $matriz[$i][$j] = 'Z';
        }
    }
}

// Loop foreach para iterar sobre as linhas da matriz
foreach ($matriz as $linha) {
    // Loop foreach para iterar sobre os caracteres de cada linha
    foreach ($linha as $caractere) {
        // Imprime cada caractere da linha
        echo $caractere;
    }
    // Imprime <br> para quebrar a linha no contexto HTML
    echo "<br>";
}

?>
