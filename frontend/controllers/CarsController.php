<?php

namespace frontend\controllers;

use common\models\Car;
use yii\data\Pagination;

class CarsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $queryCar = Car::find();

        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $queryCar->count(),
        ]);

        $cars = $queryCar->orderBy('model')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'cars' => $cars,
            'pagination' => $pagination,
        ]);
    }

}
