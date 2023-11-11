<?php
// $client = new SoapClient('ShippingCost.wsdl');
$client = new SoapClient('http://localhost:8000/soap_server_wsdl.php?wsdl');
// $client = new SoapClient('myservice.wsdl', array('location' => "http://localhost:8000/soap_server_wsdl.php", 'uri' => "http://localhost:8000/"));

$result = $client->sayHello('John Doe');
// $result = $client->__getFunctions();
echo $result;
