<section class="page-main__section">
    <h1 class="section-name">Новости</h1>
    <div class="news-wrapper">
        <div class="news__list row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
            <?php foreach($news as $newsItem): ?>
            <div class="col">
                <a href="news/<?= $newsItem['id'] ?>" class="news__item">
                    <div class="news__image-wrapper">
                        <img class="news__image" src="images/news/<?= $newsItem['id'] ?>/<?= $newsItem['image'] ?>" alt="">
                    </div>
                    <div class="news__content">
                        <h2 class="news__title"><?= $newsItem['title'] ?></h2>
                        <p class="news__time"><?= $newsItem['date'] ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>