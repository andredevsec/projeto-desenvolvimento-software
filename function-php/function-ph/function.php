<?php
    function calcularMedia ($numeros) {
        $soma = array_sum($numeros);
        $quantidade = count($numeros);
        return $soma / $quantidade;
    }

    function saudacao ($nome) {
        return "Olá $nome! Bem vindo." ;
    }

    function redirecionar($pagina) {
        header("Location: $pagina");
        exit;
    }

    //$lista = [10,20,30,40,50]
    //echo "A média é: " . calcularMedia($lista);

?>