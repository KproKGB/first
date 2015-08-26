<?php
$client = new SoapClient("http://first/php3/soap/news.wsdl");
try{
    // ������� �������� �����?
    $result = $client->getNewsCount();
    echo "<p>����� ��������: $result</p>";
    // ������� �������� � ��������� ��������?
    $result = $client->getNewsCountByCat(1);
    echo "<p>����� �������� � ��������� ��������: $result</p>";
    // ������� ���������� �������
    $result = $client->getNewsById(1);
    $news = unserialize(base64_decode($result));
    var_dump($news);
}catch(SoapFault $e) {
    echo '�������� ' . $e->faultcode . ' ������� ������: ' . $e->getMessage();
}