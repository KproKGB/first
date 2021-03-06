<html>
<head>
    <title><?= $title?></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="inc/style.css">
</head>
<body>
<div id="dashed-line"></div>
<div id="content">
    <h1><?= $header?></h1>
    <?php include 'inc/routing.inc.php'; ?>
</div>
<div id="nav">
    <h2>Навигация по сайту</h2>
    <ul>
        <li><a href="index.php?id=registred">Добавить ученика</a></li>
        <li><a href="index.php?id=table">Таблица учеников</a></li>
        <li><a href="index.php?id=install">Установка БД</a></li>
        <li><a href="index.php?id=logout">Выход</a></li>
    </ul>
</div>
<div id="footer">
    &copy; Kpro-dev, <?= date('Y')?>
</div>
</body>
</html>