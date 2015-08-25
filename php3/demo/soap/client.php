<?php
try {
  // Создание SOAP-клиента
  $client = new SoapClient("http://first/php3/demo/soap/stock.wsdl");
	
  // Посылка SOAP-запроса c получением результат
  $result = $client->getStock("4");
  echo "Текущий запас на складе: ", $result;
} catch (SoapFault $exception) {
  echo $exception->getMessage();	
}
?>