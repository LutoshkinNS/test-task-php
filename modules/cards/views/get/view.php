<?php
/**
 * @var array $cards
 */
?>

<div>
    <div class="d-flex w-100 flex-wrap justify-content-between">
        <div class="d-flex h1"><?=$cards['name']?></div>
        <div class="d-flex align-items-center">
            <button class="btn btn-dark h-100 text-center">Приобрести</button>
        </div>
        <div class="d-flex w-100 caption"><?=$cards['preview']?></div>
    </div>
    <hr />
    <div class="d-flex">
        <div class="text-info">
            <?=$cards['description']?>
        </div>
    </div>
</div>