<?php
if (isset($id)) {
    switch ($id) {
        case 'log': include 'inc/view-log.inc.php'; break;
        case 'session': include 'session/session.php'; break;
        case 'cookie': include 'cookie/cookie.php'; break;
        case 'test': include 'test/test.php'; break;
        case 'calc': include 'calc.php'; break;
        case 'gen': include 'gen.php'; break;
        default: include 'clock.php';
    }
}
?>
