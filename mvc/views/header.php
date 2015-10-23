<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="<?= URL?>/public/css/default.css">
    <script src="<?= URL?>/public/js/jquery-1.11.3.js"></script>
    <script src="<?= URL?>/public/js/custom.js"></script>
</head>
<body>
<?php Session::init(); ?>
<div id="header">
    <?php if(Session::get('loggedIn') == false): ?>
    <a href="<?= URL?>/index">Index</a>
    <a href="<?= URL?>/help">Help</a>
    <?php endif; ?>

    <?php if(Session::get('loggedIn') == true):?>
        <a href="<?= URL ?>/dashboard">Dashboard</a>

        <?php if(Session::get('role') == 'owner'):?>
            <a href="<?php echo URL; ?>/user">Users</a>
        <?php endif; ?>

        <a href="<?= URL ?>/dashboard/logout">Logout</a>
    <?php else: ?>
        <a href="<?= URL?>/login">Login</a>
    <?php endif; ?>
</div>
<div id="content"></div>