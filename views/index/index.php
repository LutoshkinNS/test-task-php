<?php
/**
 * @var array $credits
 */

use yii\helpers\Url;

?>
<div class="display-4 mb-5">Общая информация</div>
<div class="main-page-content d-flex">
<?php foreach ($credits as $credit): ?>
    <div class="card hl-card mr-1 mb-1 p-3">
        <a class="text-decoration-none" href="<?=Url::to("/credit/{$credit['id']}")?>">
            <div class="card-title"><?=$credit['name']?></div>
        </a>
        <div class="card-body text-info"><?=$credit['preview']?></div>
        <div class="d-flex hl-card-buttons">
            <button class="btn btn-dark">Пополнить</button>
            <button class="btn btn-dark">Погасить</button>
        </div>
    </div>
<?php endforeach; ?>
</div>
