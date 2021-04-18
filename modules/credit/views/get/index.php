<?php
/**
 * @var array $credits
 */

use yii\helpers\Url;

?>
<?php foreach ($credits as $credit):?>
<a class="text-body text-decoration-none" href="<?=Url::to(["/credit/{$credit['id']}"])?>">
    <div class="credit-item pt-4 pl-2">
        <div class="h2">
            <?=$credit['name']?>
        </div>
        <div class="h4">
            <?=$credit['preview']?>
        </div>
        <div class="d-flex justify-content-start">
            <?php foreach ($credit['advantages'] as $advantage): ?>
            <div class="mark mr-3">
                <div class="lead"><?=$advantage['title']?></div>
                <div class="small"><?=$advantage['text']?></div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="mb-4"></div>
        <hr class="m-0" />
    </div>
</a>
<?php endforeach; ?>