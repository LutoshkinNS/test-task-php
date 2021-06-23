<?php
/**
 * @var array $card
 */
?>

<div>
    <div class="card-more__item">
        <div class="card-more__content">
            <h3 class="card__title"><?=$card['name']?></h3>
        </div>
        <hr />
    </div>
    <div class="card-more__item">
        <div class="card-more__content">
            <p class="card-more__subtitle">Карта</p>
            <img src="<?=$card['image']?>" alt="<?=$card['name']?>">
        </div>
        <hr />
    </div>
    <?php foreach ($card['description'] as $item): ?>
        <div class="card-more__item">
            <div class="card-more__content row">
                <div class="col-5">
                    <?=$item['title']?>
                </div>
                <ul class="col-5">
                    <?php foreach ($item['desc'] as $descItem): ?>
                        <li class="card-more__list-item"><?=$descItem?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <hr />
        </div>
    <?php endforeach; ?>
    <?php foreach ($card['notes'] as $note): ?>
        <p><?=$note?></p>
    <?php endforeach; ?>
</div>