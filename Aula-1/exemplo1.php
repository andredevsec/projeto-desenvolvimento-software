<?php
    echo "Esta é minha primeira aula de PHP";
    //phpinfo();
    #comentário
    /*
    comentário
    de multiplas linhas
    */

    $idade = 3;
    echo'<br>';
    echo $idade;
    $idade = 3.5;
    echo'<br>';
    echo $idade;
    echo'<br>';
    $idade = '7 periodo';
    echo $idade;
    echo'<br>';
    if (is_double($idade)) {
        echo "Valor double";
    }else{
        echo "Não é um valor double";
    }
     echo'<br>';
     $idade = 32;
     echo "Valor de idade $idade é inteiro:".((is_int($idade))? "Sim":"Não");
     echo'<br>';
    echo "A idade é: $idade <br>";
    echo 'A idade é: $idade <br>';
    echo "A idade de João é $idade anos <br>";
    echo 'A idade de João é ' .$idade. 'anos <br>';
    $resp = true;
    echo'<br>';

    echo "<pre>";
    $nome = "José da Silva";
    print_r($nome);
    echo'<br>';
    var_dump($nome);
    echo'<br>';
    $valores = [1,2,3,4,5,7.9,'SI'];
    print_r($valores);
    echo'<br>';
    var_dump($valores);
    echo "</pre>";

    #Constantes
    define("url_site", "https://www.google.com.br/&quot;);
    echo url_site;
    echo'<br>';
    const pais = "Brasil";
    echo pais;
    echo'<br>';
    define("URL_SITE", "https://www.google.com/&quot;);
    echo URL_SITE;
    echo'<br>';

    $n1 = 10;
    $n2 = 2;

    echo "A soma de $n1 + $n2: ".($n1 + $n2);
    echo'<br>';
    echo "O resultado: ".($n1 % $n2);
    echo'<br>';
    echo'n1 é igual a n2:'.($n1==$n2);
    echo'<br>';
    echo'n1 é diferente de n2:'.($n1<>$n2);
    echo'<br>';
    echo'Resultado:'.($n1 > 2 && $n2 > 0);
    echo'<br>';
    echo'Resultado:'.($n1 < 2 || $n2 > 0);
    echo'<br>';
?>