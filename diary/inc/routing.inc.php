<?php
if (isset($id)) {
    switch ($id) {
        case 'registred': include 'inc/registred.inc.php'; break;
        case 'install': include 'inc/installDb.inc.php'; break;
        case 'table': include 'inc/table.php'; break;
        case 'logout': include 'inc/logout.inc.php'; break;
        case 'login': include 'inc/login.inc.php'; break;
        //default: include 'index.php';
    }
}