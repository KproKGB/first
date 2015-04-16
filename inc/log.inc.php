<?php
if  (isset ($_SERVER['HTTP_REFERER'])) {
    $dt = time();
    $page = $_SERVER['REQUEST_URI'];
    $ref = $_SERVER['HTTP_REFERER'];
    $ref = pathinfo($ref, PATHINFO_BASENAME);

    $path = "$dt|$page|$ref\n";

//$path = serialize(['dt'=>$dt, 'page'=>$page, 'ref'=>$ref]);

    file_put_contents('log/' . PATH_LOG, $path, FILE_APPEND);
}

?>