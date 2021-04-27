<?php foreach($this->categories as $category_id => $category_name): ?>
    <li class="sidebar__item">
        <label class="sidebar__check check">
            <input class="check__input" type="checkbox" value="<?= $category_id ?>">
            <span class="check__box">
                <svg class="check__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="13" height="13">
                    <polyline fill="none" stroke="#fff" stroke-width="2" points="1.079 4.999 5 9 10.837 2"/>
                </svg>
            </span>
            <?= $category_name ?>
        </label>
    </li>
<?php endforeach; ?>