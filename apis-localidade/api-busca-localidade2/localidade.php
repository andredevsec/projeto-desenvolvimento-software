<?php

if (isset($_POST['city']))
{
    $city = $_POST['city'];
    $cityEncode = urldecode(iconv('UTF-8', 'ISO-8859-1', $city));
    

    //url obter o ID
    $localeURL = "http://servicos.cptec.inpe.br/XML/listaCidades?city={$cityEncode}";
    $localeData = file_get_contents($localeURL);

    $xml = simplexml_load_string($localeData);
    $json = json_encode($xml);

    echo $json;
} 

?> 