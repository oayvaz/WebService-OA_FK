<?php
$client = new SoapClient("http://127.0.0.1/wsrest/WsBanque.wsdl");

try{
	$client->create(1000000,"PATATE2","","","55000","121212121","",10000,10,10, "",5);
	echo "ok";
	echo $client->__getLastResponse();
}catch(SoapFault $e){
	echo var_dump($e);
}
catch(Exception $e){
	echo var_dump($e);
}
echo var_dump($client);

?>