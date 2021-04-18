<?php

namespace app\modules\credit\requests;

use app\helpers\requests\RequestDefaultClient;

class GetAllCreditsRequest extends RequestDefaultClient
{
    public function init()
    {
        parent::init();
        $this->setMethod('GET');
        $this->setUrl('/v2/credits/');
    }
}