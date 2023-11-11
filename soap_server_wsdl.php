<?php
class MySoapService {
    public function sayHello($name) {
        return "Hello, $name!";
    }
}

$server = new SoapServer('myservice.wsdl');
$server->setClass('MySoapService');
$server->handle();
