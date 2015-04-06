<?php
$visitCount = 0;
$lastVisit ='';
    if (isset($_COOKIE['visitCount']))
        $visitCount = $_COOKIE['visitCount'];
$visitCount++;
    if (isset($_COOKIE['lastVisit']))
        $lastVisit = date('d-m-Y H:i:s', $_COOKIE['lastVisit']);
setcookie('visitCount', $visitCount, time() + 60);
setcookie('lastVisit', time() + 60);
?>