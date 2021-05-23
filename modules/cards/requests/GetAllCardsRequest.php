<?php
namespace app\modules\cards\requests;

use app\components\requests\RequestDefaultClient;
use yii\httpclient\Response;

class GetAllCardsRequest extends RequestDefaultClient
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