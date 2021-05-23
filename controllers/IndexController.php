<?php

namespace app\controllers;

use app\modules\credit\requests\GetAllCreditsRequest;
use Yii;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex() {
        $credits = (new GetAllCreditsRequest())->send()->getData();
        return $this->render('index', ['credits' => $credits]);
    }

    public function actionError() {
        $exception = Yii::$app->errorHandler->exception;
        return $this->render('error', [
            'exception' => $exception,
        ]);
    }
}