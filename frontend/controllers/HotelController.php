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

}
