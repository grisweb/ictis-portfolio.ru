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
                    <?php new \app\widgets\filter\Filter(); ?>
                </ul>
            </div>
        </div>
        <div class="projects-wrapper__projects-list">
            <div class="projects-list">
                <div class="projects-list__settings">
                    <div class="projects-list__sort">
                        <label for="sort-select">Сортировать:</label>
                        <select class="select" name="sort-select" id="sort-select">
                            <option value="rating" selected>по рейтингу</option>
                            <option value="reviews">по отзывам</option>
                            <option value="date">по дате</option>
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
                    <div id="fon"></div>
                    <?php foreach($projects as $project): ?>
                    <li class="projects-list__item project-block project-block--projects">
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
                                    <?php foreach($project->categories_id as $category_id): ?>
                                        <a href="#" class="type-project__item"><?= $categories[$category_id]->title ?></a>
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
            </div>
        </div>
    </div>
</section>