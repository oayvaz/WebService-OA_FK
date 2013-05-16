<?php
/**
 * Created by JetBrains PhpStorm.
 * User: eric
 * Date: 04/01/13
 * Time: 12:07
 * To change this template use File | Settings | File Templates.
 */
require_once("Simulateur.php");

$server = new SoapServer("Simulateur.wsdl");
$server->setClass("Simulateur");
$server->handle();
?>
