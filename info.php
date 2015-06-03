<?php
$xml=new DomDocument('1.0','utf-8');
$sorts = $xml->appendChild($xml->createElement('sorts'));
$sort = $sorts->appendChild($xml->createElement('sort'));
$name = $sort->appendChild($xml->createElement('name'));
$name->appendChild($xml->createTextNode('Яблоко'));
//$xml->formatOutput = true;
$xml->save('goods.xml');
?>