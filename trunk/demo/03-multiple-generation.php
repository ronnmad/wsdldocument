<?php

class Complex
{
    /**
     * @var integer
     */
    public $att;
}

class Service
{
    /**
     * @return Complex
     */
    public function operation(){}
}

require '../src/WSDLDocument.php';
$wsdl1 = new WSDLDocument('Service');
$wsdl2 = new WSDLDocument('Service');
header('Content-Type: text/xml');
echo $wsdl2->saveXML();
