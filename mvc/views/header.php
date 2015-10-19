<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="<?= URL?>/public/css/default.css">
    <script src="<?= URL?>/public/js/jquery-1.11.3.js"></script>
    <script src="<?= URL?>/public/js/custom.js"></script>
    <?php
    if(isset($this->js)) {
        foreach($this->js as $js) {
            echo '<script src="' . URL . '/views/' . $js . '"></script>';
        }
    }
    ?>
</head>
<body>
<?php Session::init(); ?>
<div id="header">
    <br>
    <a href="<?= URL?>/index">Index</a>
    <a href="<?= URL?>/help">Help</a>
    <?php if(Session::get('loggedIn') == true):?>
        <a href="<?= URL?>/dashboard/logout">Logout</a>
    <?php else: ?>
        <a href="<?= URL?>/login">Login</a>
    <?php endif; ?>
</div>
<div id="content"></div>