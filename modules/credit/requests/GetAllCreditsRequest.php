<?php

namespace app\modules\credit\requests;

use app\components\requests\RequestDefaultClient;
use yii\httpclient\Response;

class GetAllCreditsRequest extends RequestDefaultClient
{
    public function init()
    {
        parent::init();
        $this->setMethod('GET');
    }

    public function send()
    {
        return new class extends Response {
            public function getData(): array
            {
                return ApiData::data();
            }
        };
    }
}