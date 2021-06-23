<?php

namespace app\modules\cards\controllers;

use app\modules\cards\requests\GetAllCardsRequest;
use app\modules\cards\requests\GetOneCardRequest;
use yii\web\Controller;

class GetController extends Controller
{
    public function actionView(string $id) {
        $card = (new GetOneCardRequest(['id' => $id]))->send()->getData();
        return $this->render('view', ['card' => $card]);
    }

    public function actionIndex() {
        $cards = (new GetAllCardsRequest())->send()->getData();
        return $this->render('index', ['cards' => $cards]);
    }
}