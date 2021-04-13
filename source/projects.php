<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Проекты</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../public/styles/normalize.css">
    <link rel="stylesheet" href="../public/styles/style.css">
</head>
<body>
<?php include('../source/blocks/page-header.php') ?>
<main class="page-main">
    <div class="page-main__container container">
        <div class="page-main__wrapper">
            <section class="page-main__section">
                <h2 class="section-name">Проекты</h2>
                <div class="projects-wrapper">
                    <div class="projects-wrapper__sidebar">
                        <div class="sidebar">
                            <header class="sidebar__header">
                                <h3 class="sidebar__title">Категория</h3>
                                <button class="sidebar__toggle">
                                <span>
                                    <svg viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5 5L9 1" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                </button>
                            </header>
                            <ul class="sidebar__list">
                                <li class="sidebar__item">
                                    <label class="sidebar__check check">
                                        <input class="check__input" type="checkbox">
                                        <span class="check__box">
                                        <svg class="check__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="13" height="13">
                                            <polyline fill="none" stroke="#fff" stroke-width="2" points="1.079 4.999 5 9 10.837 2"/>
                                        </svg>
                                    </span>
                                        Веб-сайт
                                    </label>
                                </li>
                                <li class="sidebar__item">
                                    <label class="sidebar__check check">
                                        <input class="check__input" type="checkbox">
                                        <span class="check__box">
                                        <svg class="check__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="13" height="13">
                                            <polyline fill="none" stroke="#fff" stroke-width="2" points="1.079 4.999 5 9 10.837 2"/>
                                        </svg>
                                    </span>
                                        Мобильное приложение
                                    </label>
                                </li>
                                <li class="sidebar__item">
                                    <label class="sidebar__check check">
                                        <input class="check__input" type="checkbox">
                                        <span class="check__box">
                                        <svg class="check__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="13" height="13">
                                            <polyline fill="none" stroke="#fff" stroke-width="2" points="1.079 4.999 5 9 10.837 2"/>
                                        </svg>
                                    </span>
                                        Интернет-магазин
                                    </label>
                                </li>
                                <li class="sidebar__item">
                                    <label class="sidebar__check check">
                                        <input class="check__input" type="checkbox">
                                        <span class="check__box">
                                        <svg class="check__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="13" height="13">
                                            <polyline fill="none" stroke="#fff" stroke-width="2" points="1.079 4.999 5 9 10.837 2"/>
                                        </svg>
                                    </span>
                                        Компьютерная игра
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="projects-wrapper__projects-list">
                        <div class="projects-list">
                            <div class="projects-list__settings">
                                <div class="projects-list__sort">
                                    <label for="sort-select">Сортировать:</label>
                                    <select class="select" name="sort-select" id="sort-select">
                                        <option value="1">по рейтингу</option>
                                        <option value="1">по отзывам</option>
                                        <option value="1">по дате</option>
                                    </select>
                                </div>
                                <div class="projects-list__view">
                                    <button class="projects-list__view-btn view-list projects-list__view-btn--active">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                            <rect y="12" width="14" height="4" rx="2" fill="white"/>
                                            <rect y="6" width="14" height="4" rx="2" fill="white"/>
                                            <rect width="14" height="4" rx="2" fill="white"/>
                                        </svg>
                                    </button>
                                    <button class="projects-list__view-btn view-grid">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <rect width="7" height="7" rx="1" fill="black"/>
                                            <rect y="9" width="7" height="7" rx="1" fill="black"/>
                                            <rect x="9" y="9" width="7" height="7" rx="1" fill="black"/>
                                            <rect x="9" width="7" height="7" rx="1" fill="black"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <ul class="projects-list__list">
                                <li class="projects-list__item project-block project-block--projects">
                                    <?php include ('../source/blocks/project-block.php')?>
                                </li>
                                <li class="projects-list__item project-block project-block--projects">
                                    <?php include ('../source/blocks/project-block.php')?>
                                </li>
                                <li class="projects-list__item project-block project-block--projects">
                                    <?php include ('../source/blocks/project-block.php')?>
                                </li>
                                <li class="projects-list__item project-block project-block--projects">
                                    <?php include ('../source/blocks/project-block.php')?>
                                </li>
                                <li class="projects-list__item project-block project-block--projects">
                                    <?php include ('../source/blocks/project-block.php')?>
                                </li>
                                <li class="projects-list__item project-block project-block--projects">
                                    <?php include ('../source/blocks/project-block.php')?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
<?php include('../source/blocks/page-footer.php') ?>
<script src="../public/scripts/jquery-3.5.1.min.js"></script>
<script src="../public/scripts/page-header.js"></script>
<script src="../public/scripts/jquery.nice-select.min.js"></script>
<script src="../public/scripts/projects.js"></script>
</body>
</html>