<?php

namespace app\modules\credit\controllers;

use app\modules\credit\requests\GetAllCreditsRequest;
use app\modules\credit\requests\GetOneCreditRequest;
use yii\web\Controller;

class GetController extends Controller
{
    public function actionView(string $id) {
        $credit = (new GetOneCreditRequest(['id' => $id]))->send()->getData();
        return $this->render('view', ['credit' => $credit]);
    }

    public function actionIndex() {
        $credits = (new GetAllCreditsRequest())->send()->getData();
        return $this->render('index', ['credits' => $credits]);
    }
}