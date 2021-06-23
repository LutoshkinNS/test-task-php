<?php
/**
 * @var array $credits
 * @var array $cards
 */


use yii\helpers\Url;

?>
<div class="display-4 mb-5">Общая информация</div>
<div class="main-page-content">

    <h2 class="mb-4">Кредиты</h2>
    <div class="credits-block d-flex mb-5">
        <?php foreach ($credits as $credit): ?>
            <div class="card hl-card mr-1 mb-1 p-3">
                <a class="text-decoration-none" href="<?=Url::to("/credit/{$credit['id']}")?>">
                    <h4 class="credits__title"><?=$credit['name']?></h4>
                </a>
                <div class="card-body text-info"><?=$credit['preview']?></div>
                <div class="d-flex hl-card-buttons">
                    <button class="btn btn-dark">Пополнить</button>
                    <button class="btn btn-dark">Погасить</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <div class="cards-block">
        <h2 class="mb-4">Карты</h2>
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
  </div>

</div>

<div class="main-page-content d-flex">

</div>

