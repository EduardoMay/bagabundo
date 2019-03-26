<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Attractions */

$this->title = Yii::t('app','Editar Atraccion') . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Atracciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="attractions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
