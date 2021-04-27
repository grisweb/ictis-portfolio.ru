<section class="page-main__section">
    <h2 class="section-name"><?= $project->name ?></h2>
    <div class="project-wrapper">
        <div class="project-wrapper__project-cart">
            <div class="project-cart">
                <div class="project-cart__image-wrapper">
                    <img class="project-cart__image" src="../public/images/projects/<?= $project->id ?>/<?= $project->image ?>" width="4" height="5" alt="">
                </div>
                <div class="project-cart__information">
                    <div class="project-cart__rating rating">
                        <div class="rating__body">
                            <span class="rating__active" style="width: <?= $project->rating * 20 ?>%"></span>
                        </div>
                        <span class="rating__num-rating"><?= $project->rating ?></span>
                    </div>
                    <div class="project-cart__type-project">
                        <p class="project-cart__title">Тип проекта:</p>
                        <p class="project-cart__links">
                            <?php $length = count($project->categories_id) - 1; $i = 0; foreach($project->categories_id as $category_id): ?>
                            <?php if($length===$i): ?>
                            <a href=""><?= mb_strtolower($categories[$category_id]->title) ?></a>
                            <?php endif; ?>
                                <?php if($length !== $i): ?>
                                    <a href=""><?= mb_strtolower($categories[$category_id]->title) ?></a>,
                                    <?php ++$i; endif; ?>
                            <?php endforeach; ?>
                        </p>
                    </div>
                    <div class="project-cart__type-project">
                        <p class="project-cart__title">Команда:</p>
                        <p class="project-cart__links"><a href=""><?= $project->team ?></a></p>
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
                        <?= $project->description ?>
                    </div>
                    <div id="tab-2" class="tabs-content__item"></div>
                    <div id="tab-3" class="tabs-content__item"></div>
                    <div id="tab-4" class="tabs-content__item"></div>
                </div>
            </div>
        </div>
    </div>
</section>