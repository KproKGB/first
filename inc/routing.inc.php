<?php
if (isset($id)) {
    switch ($id) {
        case 'log': include 'inc/view-log.inc.php'; break;
        case 'session': include 'session/index.php'; break;
        case 'cookie': include 'cookie/index.php'; break;
        case 'test': include 'test/index.php'; break;
        case 'calc': include 'calc.php'; break;
        case 'gen': include 'gen.php'; break;
        default: include 'clock.php';
    }
}
?>
