<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AttractionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Attractions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attractions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Attractions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type_attraction',
            'num_people',
            'price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
