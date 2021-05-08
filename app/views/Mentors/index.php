<section class="page-main__section">
    <h1 class="section-name">Наставники</h1>
    <div class="mentors-wrapper">
        <div class="mentors__list row row-cols-1 row-cols-md-3 row-cols-lg-5">
            <?php foreach($mentors as $mentor): ?>
            <div class="col">
                <a href="mentors/<?= $mentor['id'] ?>" class="mentors__item">
                    <div class="mentors__image-wrapper">
                        <img class="mentors__image" src="images/mentors/<?= $mentor['id'] ?>/<?= $mentor['image'] ?>" alt="">
                    </div>
                    <div class="mentors__content">
                        <h2 class="mentors__name"><?= $mentor['surname'] . ' ' . $mentor['name'] . ' ' . $mentor['patronymic'] ?></h2>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>