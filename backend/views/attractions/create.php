<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Attractions */

$this->title = Yii::t('app', 'Crear Atracción');
$this->params['breadcrumbs'][] = ['label' => 'Attractions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attractions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
