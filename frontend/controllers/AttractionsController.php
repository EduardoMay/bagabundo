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

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if(($model = Attractions::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

}
