<section class="page-main__section">
    <div class="news-item">
        <h1 class="section-name news-item__title"><?= $newsItem['title'] ?></h1>
        <div class="news-item__date"><?= $newsItem['date'] ?></div>
        <div class="news-item__image-wrapper">
            <img class="news-item__image" src="images/news/<?= $newsItem['id'] ?>/<?= $newsItem['image'] ?>" alt="">
        </div>
        <div class="news-item__content">
            <?= $newsItem['content'] ?>
        </div>
    </div>
</section>
