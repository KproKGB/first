<?php
if (isset($id)) {
    switch ($id) {
        case 'registred': include 'inc/registred.inc.php'; break;
        case 'install': include 'inc/installDb.inc.php'; break;
        case 'logout': include 'inc/logout.inc.php'; break;
        default: include 'index.php';
    }
}
?>