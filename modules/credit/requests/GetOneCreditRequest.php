<?php

namespace app\modules\credit\requests;

use app\helpers\requests\RequestDefaultClient;

/**
 * Class GetOneCreditRequest
 * @property string $id
 */
class GetOneCreditRequest extends RequestDefaultClient
{
    private string $_id;

    public function init()
    {
        parent::init();
        $this->setMethod('GET');
        $this->setUrl("/v2/credit/$this->_id/");
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