<?php

namespace app\controllers;

use app\modules\credit\requests\GetAllCreditsRequest;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex() {
        $credits = (new GetAllCreditsRequest())->send()->getData();
        return $this->render('index', ['credits' => $credits]);
    }

    public function actionError() {
        return $this->render('error');
    }
}