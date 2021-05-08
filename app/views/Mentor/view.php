<section class="page-main__section">
    <h1 class="section-name"><?= $mentor['surname'] . ' ' . $mentor['name'] . ' ' . $mentor['patronymic'] ?></h1>
    <div class="mentor-wrapper row">
        <div class="col-12 col-sm-5 col-md-5 col-lg-3">
            <div class="mentor-cart">
                <div class="mentor-cart__image-wrapper">
                    <img class="mentor-cart__image" src="images/mentors/<?= $mentor['id'] ?>/<?= $mentor['image'] ?>" alt="">
                </div>
                <div class="mentor-cart__directions">
                    <h2 class="mentor-cart__title">Направления:</h2>
                    <p class="mentor-cart__links">
                        <?php $length = count($mentor->categories) - 1; $i = 0; $flag = true; foreach($mentor->categories as $category): ?>
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
                <?php if(!empty($mentor['mail']) || !empty($mentor['contacts'])): ?>
                <div class="mentor-cart__contacts">
                    <h2 class="mentor-cart__title">Контакты:</h2>
                    <p class="mentor-cart__links">
                        <?php foreach($mentor['mail'] as $mail): ?>
                        <a href="mailto:<?= $mail['address'] ?>"><?= $mail['address'] ?></a>
                            <br>
                        <?php endforeach; ?>
                        <?php foreach($mentor['contacts'] as $contact): ?>
                            <a href="<?= $contact['contact'] ?>"><?= str_replace('https://','', $contact['contact']); ?></a>
                            <br>
                        <?php endforeach; ?>
                    </p>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 col-sm-7 col-md-7 col-lg-9">
            <div class="mentor-description">
                <?= $mentor['description'] ?>
            </div>
        </div>
    </div>
</section>