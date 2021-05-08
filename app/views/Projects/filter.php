<div class="projects-list__settings">
    <div class="projects-list__sort">
        <label for="sort-select">Сортировать:</label>
        <select class="select" name="sort-select" id="sort-select">
            <option value="rating"<?= $sortSelect['rating'] ?>>по рейтингу</option>
            <option value="reviews"<?= $sortSelect['reviews'] ?>>по отзывам</option>
            <option value="date"<?= $sortSelect['date'] ?>>по дате</option>
        </select>
    </div>
    <div class="projects-list__view">
        <button class="projects-list__view-btn view-list<?= $viewList['list'] ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                <rect y="12" width="14" height="4" rx="2" fill="white"/>
                <rect y="6" width="14" height="4" rx="2" fill="white"/>
                <rect width="14" height="4" rx="2" fill="white"/>
            </svg>
        </button>
        <button class="projects-list__view-btn<?= $viewList['grid'] ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <rect width="7" height="7" rx="1" fill="black"/>
                <rect y="9" width="7" height="7" rx="1" fill="black"/>
                <rect x="9" y="9" width="7" height="7" rx="1" fill="black"/>
                <rect x="9" width="7" height="7" rx="1" fill="black"/>
            </svg>
        </button>
    </div>
</div>
<div class="projects-list__list-wrapper">
    <ul class="projects-list__list">
        <div id="fon"></div>
        <?php if(!empty($projects)): ?>
            <?php foreach($projects as $project): ?>
                <li class="projects-list__item project-block<?= $viewList['item'] ?>">
                    <div class="project-block__image-wrapper">
                        <a href="/projects/<?= $project->alias ?>">
                            <img class="project-block__image" width="280" height="350" src="images/projects/<?= $project->id ?>/<?= $project->image ?>" alt="">
                        </a>
                    </div>
                    <div class="project-block__content-wrapper">
                        <div class="project-block__text-wrap">
                            <h3 class="project-block__name">
                                <a class="project-block__link" href="/projects/<?= $project->alias ?>"><?= $project->name ?></a>
                            </h3>
                            <p class="project-block__description">
                                <?= mb_substr($project->description, 0, 200) . '...' ?>
                            </p>
                        </div>
                        <div class="project-block__type-project type-project">
                            <div class="type-project__wrapper">
                                <?php foreach($project->categories as $category): ?>
                                    <a href="<?= '/projects?filter=' . $category->id ?>" class="type-project__item"><?= $category->title ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="project-block__bottom-elements">
                            <div class="project-block__rating rating">
                                <div class="rating__body">
                                    <span class="rating__active" style="width: <?= $project->rating * 20 ?>%"></span>
                                </div>
                                <span class="rating__num-reviews"><?= $project->reviews_count ?> отзыва(ов)</span>
                            </div>
                            <a href="/projects/<?= $project->alias ?>" class="project-block__button button">Подробнее</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="projects-list__null">В данной категории проектов пока нет!</p>
        <?php endif; ?>
    </ul>
    <?php if($pagination->countPages > 1): ?>
        <?= $pagination; ?>
    <?php endif; ?>
</div>