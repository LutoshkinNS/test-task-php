<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class BehaviorsController extends Controller
{
    public function behaviors()
    {
        return [
//                    if (!YII_ENV_DEV) {
//                        throw new \yii\web\HttpException(404, 'Данной страницы не существует');
//                    }
            'access' => [
                'class' => \yii\filters\AccessControl::class,
                'denyCallback' => function ($rule, $action) {
                    throw new \yii\web\HttpException(404, 'Нет доступа');
                },
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            return YII_ENV_DEV;
                        }
                    ],
                ],
            ]
        ];
    }
}