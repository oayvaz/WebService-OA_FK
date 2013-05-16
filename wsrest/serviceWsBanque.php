<?php
/**
 * Created by JetBrains PhpStorm.
 * User: eric
 * Date: 04/01/13
 * Time: 12:07
 * To change this template use File | Settings | File Templates.
 */
require_once("WsBanque.php");

$server = new SoapServer("WsBanque.wsdl");
$server->setClass("WsBanque");
$server->handle();
?>
