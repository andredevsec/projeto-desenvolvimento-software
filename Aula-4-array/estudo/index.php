<?php
    $valores = array(3,5,6,7);

    // Containuação do arrai, a partir do indice acima

    $valores[4]= 10;
    $valores[5]= 7;
    $valores[6]= 8;
    $valores[7]= "SI";

    //Exibe estrutura do array
    print_r($valores);

    for ($i= 0; $i<=7; $i++) {
        echo("Array na posição [$i] = $valores[$i] <br>" );
    }
    // Definindo o indice do Array

    $vogais = array(0=>"A", 1=>"E", 2=>"I");
    print_r($vogais);

    echo("<br>");

    $cadastro = array(
        "nome" => "Ana",
        "idade" => 23,
        "peso" => 65.7
    );

    print_r($cadastro);

    // pegar dados do cadastro e jogar dentroda variavel dados

    foreach ($cadastro as $dados) {
        echo $dados . "<br>";
    }

    // usando o FOREACH em um contexto mais completo
    foreach ($cadastro as $indice => $dados) {
        echo("Array na posição [$indice] = $dados <br/>" );
    }

    // Arrays bidimensional
    $matriz = array(
        array(1,2,3,4,5,6,7),
        array(1,2,3,4,5,6,7),
        array(1,2,3,4,5,6,7)
    );

    foreach ($matriz as $linha) {
        echo "<br>";
        foreach ($linha as $valor) {
            echo "$valor";
        }
    }

    // Fazendo uma matriz de outro jeit
    $matriz2 = array();
    $aux = 1;
    for( $i= 0; $i< 7; $i++ ) {
        for($j=0; $j<7; $j++){
            $matriz2[$i][$j] = $aux;
            $aux++;
        }
    }
    for( $i= 0; $i< 7; $i++ ) {
        for($j=0; $j<7; $j++){
            $matriz2[$i][$j] = $aux;
        }
        echo"<br>";
    }
    print_r($matriz2)
?>