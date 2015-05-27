<?php
if (isset($id)) {
    switch ($id) {
        case 'login': include 'inc/login.php'; break;
        case 'registred': include 'inc/reg.php'; break;
        case 'install': include 'inc/installDb.inc.php'; break;
        default: include 'index.php';
    }
}
?>