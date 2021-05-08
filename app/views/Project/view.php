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
                            <?php $length = count($project->categories) - 1; $i = 0; $flag = true; foreach($project->categories as $category): ?>
                                <?php if(($length === $i) && !$flag): ?>
                                    <a href="projects?filter=<?= $category['id'] ?>"><?= mb_strtolower($category->title) ?></a>
                                <?php endif; ?>
                                <?php if(($length !== $i) && !$flag): ?>
                                    <a href="projects?filter=<?= $category['id'] ?>"><?= mb_strtolower($category->title) ?></a>,
                                <?php ++$i; endif; ?>
                                <?php if($flag && $length != $i): ?>
                                    <a href="projects?filter=<?= $category['id'] ?>"><?= ($category->title) ?></a>,
                                <?php ++$i; $flag = false; endif; ?>
                                <?php if($flag && $length === $i): ?>
                                    <a href="projects?filter=<?= $category['id'] ?>"><?= ($category->title) ?></a>
                                <?php ++$i; $flag = false; endif; ?>
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
                    <div id="tab-2" class="tabs-content__item">
                        <div class="gallery row row-cols-3 row-cols-md-4 row-cols-lg-5">
                            <?php foreach($project->gallery as $image): ?>
                            <div class="col">
                                <div class="gallery__item">
                                    <a class="gallery__link" href="<?= 'images/projects/' . $project['id'] . '/' . $image['name'] ?>" data-fancybox="gallery" data-caption="<?= $image['description'] ?>">
                                        <img class="gallery__image" src="<?= 'images/projects/' . $project['id'] . '/' . $image['name'] ?>" alt="<?= $image['description'] ?>"/>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php foreach($project['video'] as $video): ?>
                            <div class="col">
                                <div class="gallery__item">
                                    <a data-fancybox="gallery" data-caption="<?= $video['description'] ?>" href="https://www.youtube.com/watch?v=<?= $video['youtube_id'] ?>">
                                        <img class="gallery__image gallery__video" src="http://img.youtube.com/vi/<?= $video['youtube_id'] ?>/mqdefault.jpg" alt="<?= $video['description'] ?>"/>
                                        <div class="gallery__fon"></div>
                                        <svg style="width: 40px; height: 40px" class="gallery__image" xmlns="http://www.w3.org/2000/svg" width="20" height="40" viewBox="0 0 135 122" fill="none">
                                            <path d="M135 61L0 121.622L0 0.378223L135 61Z" fill="#F2F2F2"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div id="tab-3" class="tabs-content__item"></div>
                    <div id="tab-4" class="tabs-content__item"></div>
                </div>
            </div>
        </div>
    </div>
</section>