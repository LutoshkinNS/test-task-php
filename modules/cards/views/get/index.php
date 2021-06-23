<?php
/**
 * @var array $cards
 */

use yii\helpers\Url;

?>
<?php foreach ($cards as $card): ?>
    <div class="flex-row card mb-5 p-3">
        <div class="d-flex align-items-center card__img m-2 mr-5">
            <img src="<?=$card['image']?>" alt="<?=$card['name']?>">
        </div>
        <div class="card__desc">
            <a class="text-decoration-none" href="<?=Url::to("/cards/{$card['id']}")?>">
                <h3 class="card__title"><?=$card['name']?></h3>
            </a>
            <p class="card__preview"><?=$card['preview']?></p>
            <ul class="card__advantages d-flex flex-row flex-wrap">
                <?php foreach ($card['advantages'] as $advantage): ?>
                    <li class="d-flex flex-column card__advantage">
                        <span class="card__advantage-title"><?=$advantage['title']?></span>
                        <span class="card__text"><?=$advantage['text']?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="card__controls d-flex flex-row">
                <button class="card__btn mr-3">Оформить</button>
                <a class="card__btn-more" href="<?=Url::to("/cards/{$card['id']}")?>">
                    Подробнее о карте
                </a>
            </div>
        </div>
    </div>
<?php endforeach; ?>