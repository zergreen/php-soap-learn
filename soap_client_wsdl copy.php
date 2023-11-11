<?php
echo 'hi';
$client = new SoapClient('http://localhost:3000/ShippingCostService?wsdl');
echo 'helloworld1';
// $client = new SoapClient('http://localhost:8000/soap_server_wsdl.php?wsdl');
// $client = new SoapClient('myservice.wsdl', array('location' => "http://localhost:8000/soap_server_wsdl.php", 'uri' => "http://localhost:8000/"));

// $result = $client->sayHello('John Doe');
$result = $client->shippingCost('Shipping_cost: 4.9');
echo $result;
