<?php

$client = new SoapClient(
    'http://127.0.0.1/wsrest/Simulateur.wsdl',
    array(
        'wsdl_cache' => 0,
        'trace' => 1
    )
);

$glob = 0;
$mensu = 0;
$assu = 0;
try {
    //$mensu = $client->calculMensualite(50, 10, 100000, 200000);
    $assu = $client->calculMensualiteAssurance(50, 10, 100000, 200000);
    //$glob = $client->calculMensualiteGlobale(50, 10, 100000, 200000);
} catch (SoapFault $exception) {
    echo $exception;
}

echo $client->__getLastResponse();

echo $glob;
echo $assu;
echo $mensu;

?>