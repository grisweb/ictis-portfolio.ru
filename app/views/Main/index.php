<?php if($news) : ?>
<section class="page-main__section slider-news">
    <?php foreach ($news as $article): ?>
    <a href="#" class="slider-news__slide">
        <div class="slider-news__image-wrapper">
            <div class="slider-news__image" style="background-image:url(../images/news/<?= $article->id ?>/<?= $article->image ?>)"></div>
            <div class="slider-news__description"><?= $article->title ?></div>
        </div>
    </a>
    <?php endforeach; ?>
</section>
<?php endif; ?>
<?php if($mentors): ?>
<section class="page-main__section">
    <h2 class="section-name">Наставники</h2>
    <div class="slider-mentors">
        <?php foreach($mentors as $mentor): ?>
        <div class="slider-mentors__slide-wrapper">
            <a class="slider-mentors__slide" href="">
                <div class="slider-mentors__image-wrapper">
                    <div class="slider-mentors__image" style="background-image: url(../images/mentors/<?= $mentor->id?>/<?= $mentor->image?>)"></div>
                </div>
                <p class="slider-mentors__name">
                    <?= $mentor->surname . ' ' . mb_substr($mentor->name, 0, 1) . '. ' . mb_substr($mentor->patronymic, 0, 1) . '.' ?>
                </p>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>
<?php if($best_projects): ?>
<section class="page-main__section">
    <h2 class="section-name">Лучшие проекты</h2>
    <ul class="best-projects__list">
        <?php foreach($best_projects as $project): ?>
        <li class="best-projects__item project-block project-block--best-projects">
            <div class="project-block__image-wrapper">
                <a href="/projects/<?= $project->alias ?>">
                    <img class="project-block__image" width="280" height="350" src="images/projects/<?= $project->id ?>/<?= $project->image ?>" alt="">
                </a>
            </div>
            <div class="project-block__content-wrapper">
                <div class="project-block__text-wrap">
                    <h3 class="project-block__name"><a class="project-block__link" href="/projects/<?= $project->alias ?>"><?= $project->name ?></a></h3>
                    <p class="project-block__description">
                        <?= mb_substr($project->description, 0, 200) . '...' ?>
                    </p>
                </div>
                <div class="project-block__type-project type-project">
                    <div class="type-project__wrapper">
                        <?php foreach($project->categories as $category): ?>
                        <a href="<?= '/projects?filter=' . $category->id ?>" class="type-project__item"><?= $category['title'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="project-block__bottom-elements">
                    <div class="project-block__rating rating">
                        <div class="rating__body">
                            <span class="rating__active" style="width: <?= $project->rating * 20 ?>%"></span>
                        </div>
                        <span class="rating__num-reviews"><?= $project->reviews_count ?> отзывов</span>
                    </div>
                    <a href="/projects/<?= $project->alias ?>" class="project-block__button button">Подробнее</a>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
</section>
<?php endif; ?>