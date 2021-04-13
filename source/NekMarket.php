<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>NekMarket</title>
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
                <h2 class="section-name">NekMarket</h2>
                <div class="project-wrapper">
                    <div class="project-wrapper__project-cart">
                        <div class="project-cart">
                            <div class="project-cart__image-wrapper">
                                <img class="project-cart__image" src="../public/images/projects/1/nekweb.png" width="4" height="5" alt="">
                            </div>
                            <div class="project-cart__information">
                                <div class="project-cart__rating rating">
                                    <div class="rating__body">
                                        <span class="rating__active" style="width: 90%"></span>
                                    </div>
                                    <span class="rating__num-rating">4,5</span>
                                </div>
                               <div class="project-cart__type-project">
                                   <p class="project-cart__title">Тип проекта:</p>
                                   <p class="project-cart__links"><a href="">Веб-сайт</a>, <a href="">интернет-магазин</a></p>
                               </div>
                                <div class="project-cart__type-project">
                                    <p class="project-cart__title">Команда:</p>
                                    <p class="project-cart__links"><a href="">NekWeb</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-wrapper__project-tabs">
                        <div class="project-tabs">
                            <div class="tabs-triggers">
                                <a href="#tab-1" class="tabs-triggers__item tabs-triggers__item--active">Описание</a>
                                <a href="#tab-2" class="tabs-triggers__item">Галерея</a>
                                <a href="#tab-3" class="tabs-triggers__item">Разработчики</a>
                                <a href="#tab-4" class="tabs-triggers__item">Тех. описание</a>
                            </div>
                            <div class="tabs-content">
                                <div id="tab-1" class="tabs-content__item tabs-content__item--active">
                                    NekMarket - это функционриующая платформа интернет-торговли.
                                    Сайт предоставляет лёгкий доступ продавцам для начала работы и прямого осуществления продаж. Достаточно
                                    будет лишь зарегистрироваться и заполнить основные данные. При этом для продавцов будут доступен удобный
                                    личный кабинет, в котором можно подготавливать информацию о новом товаре и в любой удобный момент публиковать
                                    новое предложение на платформе. Также есть возможность отслеживать статистику продаж, производить сравнение
                                    аналогов и использовать другие удобные функции.
                                </div>
                                <div id="tab-2" class="tabs-content__item"></div>
                                <div id="tab-3" class="tabs-content__item"></div>
                                <div id="tab-4" class="tabs-content__item"></div>
                            </div>
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
<script src="../public/scripts/project.js"></script>
</body>
</html>

