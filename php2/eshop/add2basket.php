<?php
require "inc/lib.inc.php";
require "inc/config.inc.php";

$count = 1;
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}
add2Basket($id);
header("Location: catalog.php");
