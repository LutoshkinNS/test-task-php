<?php

namespace app\controllers;

use app\modules\credit\requests\GetAllCreditsRequest;
use app\modules\cards\requests\GetAllCardsRequest;
use Yii;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex() {
        $credits = (new GetAllCreditsRequest())->send()->getData();
        $cards = (new GetAllCardsRequest())->send()->getData();
        return $this->render('index', ['credits' => $credits, 'cards' => $cards]);
    }

    public function actionError() {
        $exception = Yii::$app->errorHandler->exception;
        return $this->render('error', [
            'exception' => $exception,
        ]);
    }
}