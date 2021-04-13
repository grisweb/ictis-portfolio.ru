<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?= renderTemplate('blocks/Page-header'); ?>
<main class="page-main">
    <div class="page-main__container container">
        <div class="page-main__wrapper">
           <?=$content;?>
        </div>
    </div>
</main>
<?= renderTemplate('blocks/Page-footer'); ?>
<script src="../public/scripts/jquery-3.5.1.min.js"></script>
<script src="../public/scripts/page-header.js"></script>
<script src="../public/scripts/slick.min.js"></script>
<script src="../public/scripts/slider.js"></script>
<script src="scripts/projects.js"></script>
<script src="scripts/project.js"></script>
</body>
</html>


