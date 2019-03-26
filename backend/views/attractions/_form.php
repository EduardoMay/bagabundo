<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Attractions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attractions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_attraction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_people')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
