<?php

namespace frontend\controllers;

use common\models\Attractions;
use yii\data\Pagination;

class AttractionsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $queryAttractions = Attractions::find();

        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $queryAttractions->count(),
        ]);

        $attractions = $queryAttractions->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'attractions' => $attractions,
            'pagination' => $pagination,
        ]);
    }

}
