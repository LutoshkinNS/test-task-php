<?php
namespace app\modules\cards\requests;

use app\components\requests\RequestDefaultClient;
use yii\httpclient\Response;
use yii\web\NotFoundHttpException;

/**
 * Class GetOneCardRequest
 * @property string $id
 */
class GetOneCardRequest extends RequestDefaultClient
{
    private string $_id;

    public function init()
    {
        parent::init();
        $this->setMethod('GET');
    }

    public function send()
    {
        return new class(['id' => $this->_id]) extends Response {

            private int $_id;

            /**
             * @return int
             */
            public function getId(): int
            {
                return $this->_id;
            }

            /**
             * @param int $id
             */
            public function setId(int $id): void
            {
                $this->_id = $id;
            }

            public function getData(): array
            {
                $data = ApiData::data();
                $card = current(array_filter($data, function($item) {
                    return $item['id'] == $this->getId();
                }));
                if (!$card) throw new NotFoundHttpException('Данная карта не найдена');
                else return $card;
            }
        };
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->_id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->_id = $id;
    }
}