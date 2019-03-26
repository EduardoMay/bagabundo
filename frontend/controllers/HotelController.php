<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Hotel;
use yii\data\Pagination;

class HotelController extends Controller
{
    public function actionIndex()
    {
        $queryHotel = Hotel::find();

        $pagination = new Pagination([
            'defaultPageSize' => 20,
            'totalCount' => $queryHotel->count(),
        ]);

        $hotels = $queryHotel->orderBy('hotel_name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'hotels' => $hotels,
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
        if(($model = Hotel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

}
